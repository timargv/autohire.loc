<?php

namespace App\Http\Controllers\CarAdverts;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\Year;
use App\Http\Requests\Adverts\SearchRequest;
use App\Http\Router\AdvertsPath;
use App\Http\Controllers\Controller;
use App\UseCases\CarAdverts\SearchService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class AdvertController extends Controller
{

    private $search;

    public function __construct(SearchService $search)
    {
        $this->search = $search;
    }

    public function index (SearchRequest $request, AdvertsPath $path) {

        $carBrand = $path->carBrand;
        $result = $this->search->search($carBrand, $request, 20, $request->get('page', 1));
        $carAdverts = $result->carAdverts;
        $carBrandsCounts = $result->carBrandsCounts;

//        $query = Advert::active()->orderByDesc('published_at');

//        if ($carBrand = $path->carBrand) {
//            $query->forCarSeries($carBrand)->orWhere(function ($query) use ($carBrand) {
//                $query->forCarModel($carBrand)->orWhere(function ($query) use ($carBrand) {
//                    $query->forCarBrand($carBrand)->active();
//                })->active();
//            })->active();
//        }

        $query = $carBrand ? $carBrand->children() : CarBrand::whereIsRoot();
        $carBrands = $query->defaultOrder()->getModels();

        $carBrands = array_filter($carBrands, function (CarBrand $carBrand) use ($carBrandsCounts) {
            return isset($carBrandsCounts[$carBrand->id]) && $carBrandsCounts[$carBrand->id] > 0;
        });

        $car_years = Year::all();
        $types = Advert::typeRental();
        $attributes = Attribute::all();

//        if (!empty($request)) {
//            $query->whereHas('carBrand', function ($query) use ($carBrand) {
//                $query->where('id', $carBrand->id)->orWhere('slug', $carBrand->slug);
//            });
//        }




        $user = Auth::user();

        return view('car-adverts.index', compact('carBrand', 'carAdverts', 'user', 'carBrands', 'car_years', 'types', 'attributes', 'carBrandsCounts'));
    }

    public function show (Advert $carAdvert)
    {
        if (!($carAdvert->isActive() || Gate::allows('show-advert', $carAdvert))) {
            abort(404);
        }

        $user = Auth::user();

        $mainCarImage = $carAdvert->getMainPhoto($carAdvert->photos);

        $carAttributes = $carAdvert->values()
                ->join('car_attributes', 'car_attributes.id', '=', 'car_advert_values.car_attribute_id')
                ->join('car_adverts', 'car_adverts.id', '=', 'car_advert_values.car_advert_id')
                ->select('car_attributes.name', 'car_advert_values.value')->pluck('value', 'name');

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
