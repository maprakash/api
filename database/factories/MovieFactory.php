<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\movie;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(movie::class, function (Faker $faker) {
    $genres = App\genre::pluck('id')->toArray();
    return [
        'title' => $faker->name,
        'genre_id' => $faker->randomElement($genres),
        'stock' => $faker->numberBetween(1, 25),
        'rate' => $faker->numberBetween(1, 5),
    ];
});

