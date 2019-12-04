<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    $names = ['DAIKIN', 'HAIER', 'KOPPEL', 'MIDEA', 'MITSUBISHI', 'PANASONIC', 'TECO'];
    return [
        'name' => $faker->unique()->randomElement($names)
    ];
});
