<?php

namespace App\Http\Controllers\Admin\CarAdvert;

use App\Entity\Cars\Advert\Advert;
use App\Http\Requests\Adverts\RejectRequest;
use App\UseCases\CarAdverts\CarAdvertService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{

    private $service;

    public function __construct(CarAdvertService $service)
    {
        $this->service = $service;
        $this->middleware('can:manage-adverts');
    }

    public function index(Request $request)
    {
        $query = Advert::orderByDesc('updated_at');

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

        if (!empty($value = $request->get('author'))) {
            $query->whereHas('author', function ($query) use ($value) {
                $query->where('name', 'like', '%'.$value.'%');
            });
        }

        if (!empty($value = $request->get('status'))) {
            $query->where('status', $value);
        }


        $car_adverts = $query->paginate(20);


        $statuses = Advert::statusesList();

        $roles = User::rolesList();

        return view('admin.car-adverts.adverts.index', compact('car_adverts', 'statuses', 'roles'));
    }


    /*
     * Форма для текста почему не приняли объявление модератором или администратором
     * */
    public function rejectForm(Advert $carAdvert)
    {
        return view('admin.car-adverts.adverts.reject', compact('carAdvert'));
    }


    /*
     * Объявление не принято с объяснением от модератора или администратора переведен в статус черновик
     * */
    public function reject(RejectRequest $request, Advert $carAdvert)
    {
        try {
            $this->service->reject($carAdvert->id, $request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cars.adverts.show', $carAdvert);
    }


    /*
     * Объявление промодерированно, и активирована
     * */
    public function moderate(Advert $carAdvert)
    {
        try {
            $this->service->moderate($carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->back();
    }


    /* Отклонить объявление
     * Send Car Advert
     * */
    public function send(Advert $carAdvert)
    {
        try {
            $this->service->sendToModeration($carAdvert->id);
        } catch (\DomainException $e) {
            $notification = [
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            ];
            return back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('info', 'Активирован');
    }


    /* Закрыть объявление
     * Close Car Advert
     * */
    public function close(Advert $carAdvert)
    {
        try {
            $this->service->close($carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cars.adverts.show', $carAdvert);
    }


    /* Удалить объявление
     * Delete Car Advert
     * */
    public function destroy(Advert $carAdvert)
    {
        try {
            $this->service->remove($carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('info', 'Удалено');
    }

}
