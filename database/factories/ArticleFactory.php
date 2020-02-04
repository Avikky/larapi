<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'body'  => $faker->text(200),
        'image' => $faker->imageUrl($width = 200, $height = 200),
        'category_id' =>$faker->randomDigit (1)
    ];
});
