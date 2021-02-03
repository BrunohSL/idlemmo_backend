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
