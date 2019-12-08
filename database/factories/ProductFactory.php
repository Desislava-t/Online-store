<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(Product::class, function (Faker $faker) {
    $image = $faker->image();
    $imageFile = new File($image);
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(10, 300),
        'image' => $faker->imageUrl($width = 1012, $height = 1800, 'fashion', true, 'Faker', true),

    ];
});
