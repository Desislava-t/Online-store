<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'image' => 'https://source.unsplash.com/random',
        'imageBlog' => 'https://source.unsplash.com/random',
    ];
});
