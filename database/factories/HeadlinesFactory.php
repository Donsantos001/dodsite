<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Headlines;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Headlines::class, function (Faker $faker) {
    return [
        'headline' => $faker->title,
        'body' => $faker->paragragh(25),
        'created_at' => now()
    ];
});
