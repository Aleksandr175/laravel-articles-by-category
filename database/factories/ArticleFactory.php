<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
       'user_id' => 1,
        'category_id' => rand(1, 4),
        'preview' => rand(1, 6) . '.jpg',
        'title' => $faker->sentence(3, 6),
        'text' => $faker->sentence(100),
        'views' => $faker->numberBetween(10, 2000)
    ];
});
