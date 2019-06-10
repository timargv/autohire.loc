<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Entity\Tenant\BlackList;
use Faker\Generator as Faker;

$factory->define(BlackList::class, function (Faker $faker) {

    $active = $faker->boolean;

    return [
        'name' => $faker->name,
        'city'  => $faker->city,
        'author_id' => random_int(1, 12),
        'status' => $active ? BlackList::STATUS_ACTIVE : BlackList::STATUS_MODERATION,
    ];
});
