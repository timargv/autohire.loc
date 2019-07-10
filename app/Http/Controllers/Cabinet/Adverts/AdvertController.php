<?php

namespace App\Http\Controllers\Cabinet\Adverts;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdvertController extends Controller
{

    public function index () {
        $car_adverts = Advert::forUser(Auth::user())->orderByDesc('id')->with('carBrand')->paginate(20);
        return view('cabinet.adverts.index', compact('car_adverts'));
    }

    public function create() {

        $car_brands = CarBrand::all();
        $car_years = Year::all();
        $types = Advert::typeRental();
        $attributes = Attribute::all();
        return view('cabinet.adverts.create', compact('car_brands', 'car_years', 'types', 'attributes'));
    }

}
