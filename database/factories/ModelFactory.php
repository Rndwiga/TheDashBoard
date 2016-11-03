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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('login123'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\UserProfile::class, function (Faker\Generator $faker) {
    return [
        'dob' => $faker->date(),
        'mobile' => $faker->mobileNumber(),
        'gender' => $faker->sex(),
        'facebook' => $faker->url(),
        'twitter' => $faker->url(),
        'gplus' => $faker->url(),
        'github' => $faker->url(),
        'address' => $faker->address(),
        'bio' => $faker->text(),
        'profile_picture' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'user_id' => function () {
            return factory(App\User::class)->id;
        },
    ];
});
