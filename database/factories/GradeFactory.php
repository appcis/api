<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Grade;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'lib_court' => $faker->word,
        'lib_long' => $faker->word,
        'ordre' => $faker->unique()->randomNumber()
    ];
});
