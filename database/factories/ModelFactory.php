<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence(),
        'image' => 'http://loremflickr.com/400/300?random='.rand(1,100),
        'price' => $faker->numberBetween(3,100),
        'description' => $faker->paragraph(2),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(),
        'image' => 'http://loremflickr.com/400/300?random='.rand(1, 100),
        'price' => $faker->numberBetween(3, 100),
        'description' => $faker->paragraph(2)
    ];
});
