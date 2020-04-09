<?php

/** @var Factory $factory */

use App\Models\Alliance\Alliance;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Alliance::class, function (Faker $faker) {
    return [
        'name' => Str::random(15),
        'tag' => Str::random(10),
        'first_description' => Str::random(200),
        'second_description' =>  Str::random(100),
        'updated_at' => now(),
        'created_at' => now()
    ];
});
