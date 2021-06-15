<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'product_photo' => $faker->imageUrl( $width = 640, $height = 480, 'cats'),
        'product_name' => $faker->sentence($nbWords = 6),
        'product_classify' => $faker->sentence($nbWords = 2),
        'product_context' => $faker->realText(30),
        'product_price' => $faker->numberBetween($min = 40, $max = 200)
    ];
});
