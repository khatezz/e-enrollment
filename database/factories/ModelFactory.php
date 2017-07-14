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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Student::class, function (Faker\Generator $faker) {
	$gender = ["Male","Female"];
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'middlename' => $faker->lastname,
        'bday' => $faker->date('Y-m-d'),
        'purok' => $faker->word,
        'barangay' => $faker->word,
        'city' => $faker->word,
        'phonenumber' => $faker->phoneNumber,
        'gender' => $gender[rand(0,1)],
        'user_id' => App\User::all()->random()->id
    ];
});
