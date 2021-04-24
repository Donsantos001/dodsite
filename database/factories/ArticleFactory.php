<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence(4, true),
        'body' => $faker->paragraph(46, true),
        'image' => $faker->name.'.jpg',
        'views' => $faker->numberBetween(0, 120000),
        'created_at' => now()
    ];
});
