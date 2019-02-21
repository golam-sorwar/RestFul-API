<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' =>$faker->numberBetween(250,2000),
        'stock' => $faker->randomDigit,
        'discount' =>$faker->numberBetween(20,80)
    ];
});
