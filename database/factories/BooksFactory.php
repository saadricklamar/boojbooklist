<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'author' => $faker->firstName,
        'publication' => $faker->year,
    ];
});
