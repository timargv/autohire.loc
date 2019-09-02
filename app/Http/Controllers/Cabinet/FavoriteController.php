<?php

namespace App\Http\Controllers\Cabinet;

use App\Entity\Cars\Advert\Advert;
use App\UseCases\CarAdverts\FavoriteService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{

    private $service;

    public function __construct(FavoriteService $service)
    {
        $this->service = $service;
        $this->middleware('auth');
    }

    public function index() {
        $car_adverts =  Advert::favoredByUser(Auth::user())->active()->orderByDesc('id')->paginate(20);
        return view('cabinet.favorites.index', compact('car_adverts'));
    }

    public function remove (Advert $carAdvert)
    {
        try {
            $this->service->remove(Auth::id(), $carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return back()->with('success', 'Удалено из избраное');
    }

}
