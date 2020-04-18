<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AllianceInvite;
use App\User;
use Faker\Generator as Faker;

$factory->define(AllianceInvite::class, function (Faker $faker) {
    return [
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'user_id' => $faker->unique()->numberBetween(1, User::count())
    ];
});
