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

/**
 * Factory definition for model App\Messages.
 */
$factory->define(App\Messages::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->email,
        'telephone' => $faker->telephone,
    ];
});

/**
 * Factory definition for model App\Users.
 */
$factory->define(App\Users::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $user['id'],
        'description' => $faker->text,
    ];
});

/**
 * Factory definition for model App\Item.
 */
$factory->define(App\Item::class, function ($faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->price,
        'type' => $faker->type,
        'level' => $faker->level,
    ];
});
