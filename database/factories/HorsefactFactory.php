<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Horsefact;
use Faker\Generator as Faker;

$factory->define(Horsefact::class, function (Faker $faker) {
    return [
        'fact' => $faker->unique()->sentence,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ];
});
