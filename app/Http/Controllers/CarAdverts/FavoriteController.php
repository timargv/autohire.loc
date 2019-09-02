<?php

namespace App\Http\Controllers\CarAdverts;

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


    public function add(Advert $carAdvert)
    {
        try {
            $this->service->add(Auth::id(), $carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Добавлена в избранное.');
    }

    public function remove(Advert $carAdvert)
    {
        try {
            $this->service->remove(Auth::id(), $carAdvert->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
