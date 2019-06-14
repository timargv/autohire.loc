<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Entity\Tenant\BlackListComment;
use Faker\Generator as Faker;

$factory->define(BlackListComment::class, function (Faker $faker) {
    $active = $faker->boolean;

    return [
        'comment'  => $faker->realText(300, 2),
        'author_id' => random_int(1, 10),
        'black_list_tenant_id' => $faker->unique()->numberBetween(1, 10),
        'status' => $active ? BlackListComment::STATUS_ACTIVE : BlackListComment::STATUS_MODERATION,
    ];

});
