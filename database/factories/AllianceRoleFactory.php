<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AllianceRole;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(AllianceRole::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, User::count()),
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'name' => Str::random(25)
    ];
});
