<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\TopProduct;
use Faker\Generator as Faker;

$factory->define(TopProduct::class, function (Faker $faker) {
//    $image = $faker->image();
//    $imageFile = new File($image);
    return [
        'product_name' => $faker->name,
        'product_price' => $faker->numberBetween(10, 300),
//        'image' => $faker->imageUrl($width = 708, $height = 472, 'fashion', true, 'Faker', true),
//        'image' => $faker->imageUrl($width = 708, $height = 472) // 'http://lorempixel.com/640/480/'
        'image' => 'https://source.unsplash.com/random',

    ];
});
