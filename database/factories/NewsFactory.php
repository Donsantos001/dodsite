<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence(10, true),
        'category' => $faker->sentence(1),
        'body' => $faker->paragraph(46, true),
        'image' => $faker->sentence(1).'jpg',
        'created_at' => now()
    ];
});
