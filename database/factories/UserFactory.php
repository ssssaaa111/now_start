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
        'avatar' => $faker->imageUrl(),
        'password' => bcrypt(str_random(10)), // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Appointment::class, function (Faker $faker) {
    $carbon = new Carbon\Carbon();
    $carbon->addDays(random_int(0, 7));
    $carbon->addHours(random_int(0, 23));
    return [
        //'publisher_id' => factory(App\User::class)->create()->id,
        'publisher_id' => random_int(1, 20),
        'start_time' => $carbon->format('Y-m-d H:i:s'), // secret
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    $carbon = new Carbon\Carbon('24.04.2018 00:00');
    $carbon->addDays(random_int(0, 20));
    $carbon->addHours(random_int(0, 23));
    return [
        'user_id' => random_int(1, 100),
//        'title' => $faker->sentence,
        'body' => $faker->paragraph(50),
//        'subject' => $faker->languageCode,
//        'nation' => $faker->country,
//        'price' => random_int(100, 500)
    ];
});

$factory->define(App\Teacher::class, function (Faker $faker) {
    $carbon = new Carbon\Carbon('24.04.2018 00:00');
    $carbon->addDays(random_int(0, 20));
    $carbon->addHours(random_int(0, 23));
    return [
        'user_id' => factory(App\User::class)->create()->id,
        'name' => $faker->name,
        'avatar' => $faker->imageUrl(),
        'lang_level' => 'upper',
        'language' => $faker->languageCode,
        'sex' => "M",
        'year_of_birth' => "1990",
        'country' => $faker->country,
        'phone_number' => $faker->randomNumber(),
        'profile_headline' => $faker->sentence,
        'description' => $faker->paragraph,
        'video_introduction' => $faker->url,
        'university' => "UESTC",
        'degree' => "master",
        'certificate' => "master",
        'tutoring_experience' => "3",
        'hourly_rate' => "300",
        'group_lessons' => "true",
        'skype_id' => random_int(10000,1000001),
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {

    return [
        'user_id' => random_int(1, 100),
        'post_id' => random_int(1, 200),
        'body' => $faker->sentence,
    ];
});

$factory->define(App\Reply::class, function (Faker $faker) {
    $post_id = random_int(1, 20);
    return [
        'user_id' => random_int(1, 30),
        'post_id' => $post_id,
        'comment_id' => App\Post::find($post_id)->comments->pluck('id')->random(),
        'body' => $faker->sentence,
    ];
});


$factory->define(Cmgmyr\Messenger\Models\Thread::class, function (Faker $faker) {
    return [
        'subject' => $faker->sentence,
    ];
});

$factory->define(Cmgmyr\Messenger\Models\Message::class, function (Faker $faker) {
    return [
        'user_id' => 33,
        'thread_id' => 1,
        'body' => 'A message',
    ];

});


$factory->define(Cmgmyr\Messenger\Models\Participant::class, function (Faker $f) {
    return [
        'user_id' => 33,
        'thread_id' => 1,
    ];
});

