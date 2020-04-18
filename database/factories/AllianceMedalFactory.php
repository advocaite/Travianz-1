<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\AllianceMedal;
use Faker\Generator as Faker;

$factory->define(AllianceMedal::class, function (Faker $faker) {
    return [
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count),
        'position' => $faker->numberBetween(1, 10),
        'category' => $faker->numberBetween(0, 3),
        'week' => $faker->numberBetween(1, 52),
        'type' => $faker->numberBetween(0, 3),
        'points' => $faker->numberBetween(0, 100000000)
    ];
});
