<?php

namespace App\Http\Controllers\Cabinet\Adverts;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Advert\Dialog\Dialog;
use App\Entity\Cars\Advert\Photo;
use App\Entity\Cars\Advert\Value;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use App\Http\Requests\Adverts\DialogRequest;
use App\Http\Requests\Adverts\PhotosRequest;
use App\Http\Requests\Adverts\UpdateRequest;
use App\Http\Requests\Adverts\CreateRequest;
use App\UseCases\CarAdverts\CarAdvertService;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AdvertController extends Controller
{

    private $service;

    public function __construct(CarAdvertService $service)
    {
        $this->service = $service;
    }


    // ------ Все объявления пользователя
    public function index (Request $request) {
        $query = Advert::forUser(Auth::user())->orderByDesc('id')->with(['photos', 'carBrand', 'carYear', 'values', 'attributes']);

        if (!empty($value = $request->get('name'))) {
            $query->whereHas('values', function ($query) use ($value) {
                $query->where('value', 'like', '%'.$value.'%');
            })
                ->orWhereHas('carBrand', function ($query) use ($value) {
                $query->where('name', 'like', '%'.$value.'%')->orWhere('name_ru', 'like', '%'.$value.'%');
            })
                ->orWhereHas('carYear', function ($query) use ($value) {
                $query->where('name', 'like', '%'.$value.'%');
            })
                ->with(['photos', 'carBrand', 'carYear', 'values', 'attributes']);
        }

        $car_adverts = $query->paginate(20);

        $countCarAdvert = $query->count();

        return view('cabinet.adverts.index', compact('car_adverts', 'countCarAdvert'));
    }


    // ------ Форма добавления Объявлений
    public function create() {
        $car_brands = CarBrand::all();
        $car_years = Year::all();
        $types = Advert::typeRental();
        $attributes = Attribute::all();
        return view('cabinet.adverts.create', compact('car_brands', 'car_years', 'types', 'attributes'));
    }


    // ------ Запись объявления в базу
    public function store (CreateRequest $request)
    {
        try {
            $carAdvert = $this->service->create(Auth::id(), $request);
        } catch (\DomainException $e) {
            return back()->with('status', $e->getMessage());
        }

        return redirect()->route('cabinet.adverts.photos', compact('carAdvert'));
    }


    // ------ Показать объявление полностью
    public function show (Advert $carAdvert)
    {
        $this->checkAccess($carAdvert);
        $user = Auth::user();
        $mainCarImage = $carAdvert->getMainPhoto($carAdvert->photos);
        $carAttributes = $carAdvert->values()
            ->join('car_attributes', 'car_attributes.id', '=', 'car_advert_values.car_attribute_id')
            ->join('car_adverts', 'car_adverts.id', '=', 'car_advert_values.car_advert_id')
            ->select('car_attributes.name', 'car_advert_values.value')->get();
        return view('cabinet.adverts.show', compact('carAdvert', 'carAttributes', 'mainCarImage', 'user'));
    }


    // ------ Форма редактирования объявления
    public function edit (Advert $carAdvert) {

        $this->checkAccess($carAdvert);
        $car_brands = CarBrand::whereIsRoot()->defaultOrder('ASC')->get();
        $car_years = Year::all();
        $types = Advert::typeRental();
        $attributes = Attribute::all();
        return view('cabinet.adverts.edit', compact('carAdvert','car_brands', 'car_years', 'types', 'attributes'));
    }


    // ------ Обновить объявление
    public function update (UpdateRequest $request, Advert $carAdvert)
    {
        $this->checkAccess($carAdvert);

        try {
            $this->service->edit($carAdvert->id, $request);
        } catch (\DomainException $e) {
           return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cabinet.adverts.show', $carAdvert);
    }


    // ------ Форма добавления фотографий для Объявления
    public function photosForm (Advert $carAdvert) {
        $this->checkAccess($carAdvert);
        return view('cabinet.adverts.forms.photos', compact('carAdvert'));
    }


    // ------ Добавить одну или несколько Фотографий для объявления
    public function photos (PhotosRequest $request, Advert $carAdvert)
    {
        $this->checkAccess($carAdvert);
        try {
            $this->service->addPhotos($carAdvert->id, $request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cabinet.adverts.show', $carAdvert)->with('success', 'Фото добавлено!');
    }


    // ------ Сделать фотографию Главным в объявлении
    public function mainPhoto (Advert $carAdvert, Photo $photo) {
        $this->checkAccess($carAdvert);

        try {
            $this->service->makePhotoMain($carAdvert->id, $photo->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cabinet.adverts.show', $carAdvert)->with('success', 'Главное фото изменено!');
    }


    // ------ Удалить одну фотографию объявления
    public function destroyPhoto (Advert $carAdvert, Photo $photo)
    {
        $this->checkAccess($carAdvert);

        try {
            $this->service->deletePhoto($carAdvert->id, $photo->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Фото Удалено!');
    }


    // ------ Удалить Объявление полностью
    public function destroy(Advert $carAdvert)
    {
        $this->checkAccess($carAdvert);
        try {
            $this->service->remove($carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cabinet.adverts.index')->with('success', 'Объявление удалено!');
    }


    // ------ Отправить на модерацию
    public function send(Advert $carAdvert)
    {
        $this->checkAccess($carAdvert);
        try {
            $this->service->sendToModeration($carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cars.adverts.show', $carAdvert);
    }

    // ------ Снять объявление
    public function close(Advert $carAdvert)
    {
        $this->checkAccess($carAdvert);
        try {
            $this->service->close($carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cars.adverts.show', $carAdvert);
    }


    public function dialogs()
    {
        $dialogs = Cache::tags(Dialog::class)->rememberForever('dialogs_'.Auth::user(), function () {
            return Dialog::forUser(Auth::user())->orderByDesc('updated_at')->with(['carAdvert', 'client', 'client', 'messages'])->paginate(15);
        });
        return view('cabinet.dialogs.index', compact('dialogs'));
    }

    public function dialog($carAdvert, Dialog $dialog)
    {
        $this->checkAccessDialog($dialog);
        try {
            $messages = $dialog->messages()->orderByDesc('created_at')->paginate(15);
            $this->service->readOwnerMessages($carAdvert, $dialog->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return view('cabinet.dialogs.show', compact('dialog', 'carAdvert', 'messages'));
    }

    public function messageForm(Advert $carAdvert)
    {
        if ($carAdvert->author_id === Auth::id()) {
            return back()->with('error', 'Вы не можете отправить сообщение самому себе');
        }
        return view('cabinet.dialogs.messages._create_client', compact('carAdvert'));
    }

    public function message($id, Dialog $dialog, DialogRequest $request)
    {
        try {
            $this->service->message($id, $dialog->id, Auth::id(), $request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Good');
    }

    public function message_client($id, DialogRequest $request)
    {
        try {
            $carAdvert = $this->service->messageClient($id, Auth::id(), $request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cars.adverts.show', $carAdvert)->with('success', 'Good');
    }




    // ------ Получить Масив Марок автомобиля по ID
    public function getModels($id) {
        $carModels = $this->getCarBrand($id)->children->pluck("name","id");
        return $carModels;
    }

    // ------ Проверка на Владельца объявления
    private function checkAccess(Advert $carAdvert): void
    {
        if (!Gate::allows('manage-own-advert', $carAdvert)) {
            abort(404);
        }
    }

    // ------ Проверка на Владельца объявления
    private function checkAccessDialog(Dialog $dialog): void
    {
        if (!Gate::allows('manage-dialog', $dialog)) {
            abort(404);
        }
    }

    // ------ Найти Марку или (модель, серию) по ID
    private function getCarBrand($id) {
        return CarBrand::findOrFail($id);
    }

    private function getDialog($id) {
        return Dialog::findOrFail($id);
    }

}
