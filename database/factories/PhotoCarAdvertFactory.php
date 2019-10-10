<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entity\Cars\Advert\Photo;
use App\UseCases\CarAdverts\PhotoService;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {


    $carAdvertId = random_int(1, 200);
    $service = new PhotoService();
    $filePhoto = ['https://source.unsplash.com/1600x900/?auto,bmw'];
    $service->addPhoto($carAdvertId, $filePhoto);

    return [

    ];
});
