<?php

namespace App\Http\Controllers\CarAdverts;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\Year;
use App\Http\Router\AdvertsPath;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;


class AdvertController extends Controller
{

    public function index (AdvertsPath $path) {


        $query = Advert::active()->with(['carBrand','carModel'])->orderByDesc('published_at');

        if ($carBrand = $path->carBrand) {
            $query->forCarBrand($carBrand)->orWhere->forCarModel($carBrand)->orWhere->forCarSeries($carBrand);
        }

        $carBrands = $carBrand
            ? $carBrand->children()->defaultOrder()->getModels()
            : CarBrand::whereIsRoot()->defaultOrder('ASC')->getModels();

        $car_years = Year::all();
        $types = Advert::typeRental();
        $attributes = Attribute::all();

//        if (!empty($request)) {
//            $query->whereHas('carBrand', function ($query) use ($carBrand) {
//                $query->where('id', $carBrand->id)->orWhere('slug', $carBrand->slug);
//            });
//        }

        $carAdverts = $query->paginate(15);
        $user = Auth::user();

        return view('car-adverts.index', compact('carBrand', 'carAdverts', 'user', 'carBrands', 'car_years', 'types', 'attributes'));
    }

    public function show (Advert $carAdvert)
    {
        if (!($carAdvert->isActive() || Gate::allows('show-advert', $carAdvert))) {
            abort(404);
        }

        $user = Auth::user();

        $mainCarImage = $carAdvert->getMainPhoto($carAdvert->photos);

        $carAttributes = Cache::tags(Advert::class)->rememberForever('car_advert_value_attribute_' . $carAdvert->id, function () use ($carAdvert) {
            return $carAdvert->values()
                ->join('car_attributes', 'car_attributes.id', '=', 'car_advert_values.car_attribute_id')
                ->join('car_adverts', 'car_adverts.id', '=', 'car_advert_values.car_advert_id')
                ->select('car_attributes.name', 'car_advert_values.value')->pluck('value', 'name');
        });

        return view('car-adverts.show', compact('carAdvert', 'mainCarImage', 'carAttributes', 'user'));
    }


    private function getCarBrand ($slug) {
        return CarBrand::where('id', $slug)->orWhere('slug', $slug)->first();
    }


    public function phone(Advert $carAdvert): string
    {
        if (!($carAdvert->isActive() || Gate::allows('show-advert', $carAdvert))) {
            abort(403);
        }
        return $carAdvert->author->phone;
    }
}
