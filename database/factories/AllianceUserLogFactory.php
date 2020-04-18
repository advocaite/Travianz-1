<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\AllianceUserLog;
use App\User;
use Faker\Generator as Faker;

$factory->define(AllianceUserLog::class, function (Faker $faker) {
    return [
        'creator_user_id' => $faker->unique()->numberBetween(1, User::count()),
        'target_user_id' => $faker->unique()->numberBetween(1, User::count()),
        'type' => $faker->numberBetween(0, 9),
        'created_at' => now()
    ];
});
