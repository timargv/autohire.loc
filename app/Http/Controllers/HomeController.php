<?php

namespace App\Http\Controllers;

use App\Entity\Categories\Car\CarBrand;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $carBrands = CarBrand::whereIsRoot()->defaultOrder()->getModels();

        return view('home', compact('carBrands'));
    }
}
