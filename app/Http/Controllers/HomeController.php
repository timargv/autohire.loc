<?php

namespace App\Http\Controllers;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $carBrands = CarBrand::whereIsRoot()->defaultOrder()->getModels();
        $carAdverts = Advert::active()->orderByDesc('published_at')->paginate('15');

        $car_years = Year::all();
        $types = Advert::typeRental();
        $attributes = Attribute::all();
        $carBrand = '';

        return view('home', compact('carBrands', 'carAdverts', 'car_years', 'types', 'attributes', 'carBrand'));
    }
}
