<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Headlines;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Headlines::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence(10, true),
        'body' => $faker->sentence(26, true),
        'image' => $faker->name,
        'created_at' => now()
    ];
});
