<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Events;
use Faker\Generator as Faker;

$factory->define(Events::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence(9, true),
        'category' => $faker->sentence(1),
        'body' => $faker->paragraph(46, true),
        'image' => $faker->name.'.jpg',
        'date' => $faker->date,
        'venue' => $faker->sentence(4, true),
        'views' => $faker->numberBetween(0, 120000),
        'created_at' => now()
    ];
});
