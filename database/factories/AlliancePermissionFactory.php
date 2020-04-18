<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AlliancePermission;
use App\User;
use Faker\Generator as Faker;

$factory->define(AlliancePermission::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, User::count()),
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'type' => $faker->unique()->numberBetween(0, 7)
    ];
});
