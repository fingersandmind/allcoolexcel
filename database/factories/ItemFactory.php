<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use App\Brand;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    $brands = Brand::pluck('id');
    return [
        'brand_id' => $faker->randomElement($brands),
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'net' => $faker->randomFloat(2,5000,10000)
    ];
});
