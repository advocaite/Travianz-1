<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AllianceRanking;
use Faker\Generator as Faker;

$factory->define(AllianceRanking::class, function (Faker $faker) {
    return [
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'old_rank' => $faker->numberBetween(0, 100),
        'climbed_ranks' => $faker->numberBetween(0, 100),
        'climber_points' => $faker->numberBetween(0, 100),
        'raided_resources' => $faker->numberBetween(0, 100000000),
        'attacking_points' => $faker->numberBetween(0, 1000000),
        'defending_points' => $faker->numberBetween(0, 1000000),
        'total_attacking_points' => $faker->numberBetween(0, 10000000),
        'total_defending_points' => $faker->numberBetween(0, 10000000)
    ];
});
