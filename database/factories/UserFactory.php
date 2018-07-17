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
        'first_name' => substr($faker->sentence(2), 0, -1),
        'last_name' => substr($faker->sentence(2), 0, -1),
        'gender' => $faker->randomElement($array = array ("male","female","none-specific")),
        'hand' => $faker->randomElement($array = array ("right","left")),         
        'email' => $faker->unique()->safeEmail, 
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
