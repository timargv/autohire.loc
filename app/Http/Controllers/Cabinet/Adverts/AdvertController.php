<?php

namespace App\Http\Controllers\Cabinet\Adverts;

use App\Entity\Cars\Advert\Advert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdvertController extends Controller
{

    public function index () {
        $car_adverts = Advert::forUser(Auth::user())->orderByDesc('id')->paginate(20);
        return view('cabinet.adverts.index', compact('car_adverts'));
    }
}
