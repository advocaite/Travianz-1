<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AllianceMember;
use App\User;
use Faker\Generator as Faker;

$factory->define(AllianceMember::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, User::count()),
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count())
    ];
});
