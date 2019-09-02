<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entity\Cars\Advert\Advert;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Advert::class, function (Faker $faker) {
    $active = $faker->boolean;
    return [

        'car_brand_id' => 26,
        'car_model_id' => 309,
        'car_serie_id' => 312,
        'car_year_id'  => random_int(1, 30),
        'author_id'    => 1,
        'type_rental'  => array_rand(Advert::typeRental()),
        'description'  => $faker->realText(300, 2),
        'price_per_day'=> random_int(1000, 7000),
        'address'      => $faker->streetAddress,
        'status'       => $active ? Advert::STATUS_ACTIVE : Advert::STATUS_DRAFT,
        'published_at' => $timeAdd = Carbon::createFromDate(),
        'expires_at'   => $timeAdd->copy()->addDays(15),

    ];
});
