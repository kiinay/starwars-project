<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin.admin@gmail.com',
        'password' => Hash::make('admin'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->firstName,
        'email' => $faker->email,
        'password' => Hash::make('test'),
    ];
});

$factory->define(App\History::class, function (Faker\Generator $faker) {
    return [
        'customer_id'=> $faker->randomDigitNotNull,
        'total' => $faker->randomDigitNotNull,
        'commanded_At' => $faker->dateTimeThisYear($max = 'now'),
    ];
});

