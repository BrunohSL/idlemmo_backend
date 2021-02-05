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
        'type_id' => $faker->rand(5),
        'attack' => $faker->rand(15),
        'defense' => $faker->rand(15),
        'hp' => $faker->rand(15),
    ];
});

/**
 * Factory definition for model App\Player.
 */
$factory->define(App\Player::class, function ($faker) {
    return [
        'name' => $faker->name,
        'level' => $faker->rand(10),
        'max_hp' => $faker->rand(100),
        'actual_hp' => $faker->rand(100),
        'max_xp' => $faker->rand(50),
        'actual_xp' => $faker->rand(50),
        'strength' => $faker->rand(20),
        'agility' => $faker->rand(20),
        'inteligence' => $faker->rand(20),
        'vitality' => $faker->rand(20),
        'attack' => $faker->rand(20),
        'defense' => $faker->rand(20),
    ];
});

/**
 * Factory definition for model App\Enemy.
 */
$factory->define(App\Enemy::class, function ($faker) {
    return [
        'name' => $faker->name,
        'level' => $faker->rand(10),
        'max_hp' => $faker->rand(100),
        'actual_hp' => $faker->rand(100),
        'xp_yield' => $faker->rand(10),
        'attack' => $faker->rand(10),
        'defense' => $faker->rand(10),
        'sprite' => $faker->name,
    ];
});

/**
 * Factory definition for model App\Type.
 */
$factory->define(App\Type::class, function ($faker) {
    return [
        'type' => $faker->name,
    ];
});
