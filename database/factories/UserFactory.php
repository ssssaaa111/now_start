<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(str_random(10)), // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Appointment::class, function (Faker $faker) {
    $carbon = new Carbon\Carbon('24.04.2018 00:00');
    $carbon->addDays(random_int(0,20));
    $carbon->addHours(random_int(0,23));
    return [
        //'publisher_id' => factory(App\User::class)->create()->id,
        'publisher_id' => 36,
        'start_time' => $carbon->format('Y-m-d H:i:s'), // secret
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    $carbon = new Carbon\Carbon('24.04.2018 00:00');
    $carbon->addDays(random_int(0,20));
    $carbon->addHours(random_int(0,23));
    return [
        //'publisher_id' => factory(App\User::class)->create()->id,
        'publisher_id' => 36,
        'start_time' => $carbon->format('Y-m-d H:i:s'), // secret
    ];
});


