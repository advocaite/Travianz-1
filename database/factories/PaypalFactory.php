<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Paypal\Paypal;

//use App\Models\User\User;
use Faker\Generator as Faker;

$factory->define(Paypal::class, function (Faker $faker) {
    return [
        'txn_id'               => $faker->numberBetween(1,10000000),
        'txn_type'             => 'cart',
        'item_name'            => 'Fake Item',
        'item_number'          => $faker->numberBetween(1,1000),
        'quantity'             => '1',
        'payment_status'       => 'Completed',
        'payment_amount'       => $faker->randomFloat(2, 1, 100),
        'payment_currency'     => $faker->currencyCode,
        'payer_email'          => $faker->email,
        'payment_type'         => 'instant',
        'custom'               => $faker->numberBetween(1,10),//$faker->unique()->numberBetween(1, User::count),
        'invoice'              => $faker->numberBetween(1,1000),
        'first_name'           => $faker->firstName,
        'last_name'            => $faker->lastName,
        'address_name'         => $faker->streetAddress,
        'address_country'      => $faker->country,
        'address_country_code' => $faker->countryCode,
        'address_zip'          => $faker->numberBetween(1,1000),
        'address_state'        => $faker->state,
        'address_city'         => $faker->city,
    ];
});
