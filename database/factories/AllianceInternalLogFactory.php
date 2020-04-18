<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alliance\Alliance;
use App\Models\Alliance\AllianceInternalLog;
use App\Models\Alliance\AllianceUserLog;
use Faker\Generator as Faker;

$factory->define(AllianceInternalLog::class, function (Faker $faker) {
    return [
        'alliance_id' => $faker->unique()->numberBetween(1, Alliance::count()),
        'alliance_user_log_id' => $faker->unique()->numberBetween(1, AllianceUserLog::count())
    ];
});
