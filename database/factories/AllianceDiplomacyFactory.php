<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AllianceDiplomacy;
use App\User;
use Faker\Generator as Faker;

$factory->define(AllianceDiplomacy::class, function (Faker $faker) {
    return [
        'creator_user_id' => $faker->unique()->numberBetween(1, User::count()),
        'from_alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'to_alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'type' => $faker->numberBetween(0, 2),
        'accepted' => $faker->boolean(),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
