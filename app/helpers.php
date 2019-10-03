<?php


use App\Entity\Categories\Car\CarBrand;
use App\Http\Router\AdvertsPath;

if (! function_exists('adverts_path')) {

    function adverts_path(?CarBrand $carBrand)
    {
        return app()->make(AdvertsPath::class)
            ->withCarAdvert($carBrand);
    }
}