<?php

namespace App\Http\Controllers\Cabinet\Adverts;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Advert\Photo;
use App\Entity\Cars\Advert\Value;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use App\Http\Requests\Adverts\PhotosRequest;
use App\Http\Requests\Adverts\UpdateRequest;
use App\Http\Requests\Adverts\CreateRequest;
use App\UseCases\CarAdverts\CarAdvertService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AdvertController extends Controller
{

    private $service;

    public function __construct(CarAdvertService $service)
    {
        $this->service = $service;
    }


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

        return view('cabinet.adverts.index', compact('car_adverts'));
    }

    public function create() {
        $car_brands = CarBrand::all();
        $car_years = Year::all();
        $types = Advert::typeRental();
        $attributes = Attribute::all();
        return view('cabinet.adverts.create', compact('car_brands', 'car_years', 'types', 'attributes'));
    }


    public function store (CreateRequest $request)
    {
        try {
            $carAdvert = $this->service->create(Auth::id(), $request);
        } catch (\DomainException $e) {
            return back()->with('status', $e->getMessage());
        }

        return redirect()->route('cabinet.adverts.show', compact('carAdvert'));
    }

    public function show (Advert $carAdvert)
    {
        $this->checkAccess($carAdvert);
        $mainCarImage = $carAdvert->getMainPhoto($carAdvert->photos);
        $carAttributes = $carAdvert->values()
            ->join('car_attributes', 'car_attributes.id', '=', 'car_advert_values.car_attribute_id')
            ->join('car_adverts', 'car_adverts.id', '=', 'car_advert_values.car_advert_id')
            ->select('car_attributes.name', 'car_advert_values.value')->get();
        return view('cabinet.adverts.show', compact('carAdvert', 'carAttributes', 'mainCarImage'));
    }

    public function edit (Advert $carAdvert) {

        $this->checkAccess($carAdvert);
        $car_brands = CarBrand::whereIsRoot()->defaultOrder('ASC')->get();
        $car_years = Year::all();
        $types = Advert::typeRental();
        $attributes = Attribute::all();
        return view('cabinet.adverts.edit', compact('carAdvert','car_brands', 'car_years', 'types', 'attributes'));
    }


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

    public function photosForm (Advert $carAdvert) {
        $this->checkAccess($carAdvert);
        return view('cabinet.adverts.forms.photos', compact('carAdvert'));
    }

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

    public function mainPhoto (Advert $carAdvert, Photo $photo) {
        $this->checkAccess($carAdvert);

        try {
            $this->service->makePhotoMain($carAdvert->id, $photo->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cabinet.adverts.show', $carAdvert)->with('success', 'Главное фото изменено!');
    }

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


    private function checkAccess(Advert $carAdvert): void
    {
        if (!Gate::allows('manage-own-advert', $carAdvert)) {
            abort(403);
        }
    }



    public function getModels($id) {
        $carModels = $this->getCarBrand($id)->children->pluck("name","id");
        return json_encode($carModels);
    }

    private function getCarBrand($id) {
        return CarBrand::findOrFail($id);
    }

}
