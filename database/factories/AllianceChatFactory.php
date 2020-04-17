<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AllianceChat;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(AllianceChat::class, function (Faker $faker) {
    return [
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'user_id' => $faker->unique()->numberBetween(1, User::count()),
        'content' => Str::random(50),
        'created_at' => now()
    ];
});
