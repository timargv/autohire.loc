<?php

namespace App\Http\Controllers\CarAdverts;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Categories\Car\CarBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdvertController extends Controller
{

    public function index () {

        $query = Advert::active()->orderByDesc('id');

//        if (!empty($request)) {
//            $query->whereHas('carBrand', function ($query) use ($carBrand) {
//                $query->where('id', $carBrand->id)->orWhere('slug', $carBrand->slug);
//            });
//        }

        $carAdverts = $query->paginate(15);

        return view('car-adverts.index', compact('carAdverts'));
    }

    public function show (Advert $carAdvert)
    {
        if (!($carAdvert->isActive() || Gate::allows('show-advert', $carAdvert))) {
            abort(403);
        }

        $user = Auth::user();

        $mainCarImage = $carAdvert->getMainPhoto($carAdvert->photos);
        $carAttributes = $carAdvert->values()
            ->join('car_attributes', 'car_attributes.id', '=', 'car_advert_values.car_attribute_id')
            ->join('car_adverts', 'car_adverts.id', '=', 'car_advert_values.car_advert_id')
            ->select('car_attributes.name', 'car_advert_values.value')->get();
        return view('car-adverts.show', compact('carAdvert', 'mainCarImage', 'carAttributes', 'user'));
    }



    public function carBrand ($slug) {

        $carBrand = $this->getCarBrand($slug);
        $query = Advert::active()->orderByDesc('id');
        $query->whereHas('carBrand', function ($query) use ($carBrand) {
            $query->where('id', $carBrand->id)->orWhere('slug', $carBrand->slug);
        });

        $carAdverts = $query->paginate(15);

        return view('car-adverts.index', compact('carAdverts'));
    }

    private function getCarBrand ($slug) {
        return CarBrand::where('id', $slug)->orWhere('slug', $slug)->first();
    }
}
