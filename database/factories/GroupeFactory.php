<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Groupe;
use Faker\Generator as Faker;

$factory->define(Groupe::class, function (Faker $faker) {
    return [
        'libelle' => $faker->word,
        'description' => $faker->sentence
    ];
});
