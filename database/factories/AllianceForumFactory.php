<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AllianceForum;
use Faker\Generator as Faker;

$factory->define(AllianceForum::class, function (Faker $faker) {
    return [
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'url' => $faker->url
    ];
});
