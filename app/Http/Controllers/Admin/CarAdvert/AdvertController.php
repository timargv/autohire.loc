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


    public function rejectForm(Advert $carAdvert)
    {
        return view('admin.car-adverts.adverts.reject', compact('carAdvert'));
    }

    public function reject(RejectRequest $request, Advert $carAdvert)
    {
        try {
            $this->service->reject($carAdvert->id, $request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cars.adverts.show', $carAdvert);
    }

    public function moderate(Advert $carAdvert)
    {
        try {
            $this->service->moderate($carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cars.adverts.show', $carAdvert);
    }
}
