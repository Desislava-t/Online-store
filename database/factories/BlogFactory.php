<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $image = $faker->image();
    $imageFile = new File($image);
    return [
        'title' => $faker->name,
        'image' => $faker->imageUrl($width = 1012, $height = 1800, 'fashion', true, 'Faker', true),
        'imageBlog' => $faker->imageUrl($width = 1800, $height =1012 , 'fashion', true, 'Faker', true),
    ];
});
