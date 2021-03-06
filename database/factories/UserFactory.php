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
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\post::class, function (Faker $faker) {
    return [
        'user_id'=> App\User::all()->random()->id,
        'contents' =>$faker->paragraph(5),
        'live' => $faker->boolean(),
        'post_on' => Carbon\Carbon::parse('+1week'),

    
    ];
});


$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'user_id'=> App\User::all()->random()->id,
        'book_id'=> App\Book::all()->random()->id,
        'title' =>$faker->sentence,
        'description' => $faker->boolean(),
        'publisher'=>$faker->name,
        'ISBN'=>$faker->number,
    
    ];
});