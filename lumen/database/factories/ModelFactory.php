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
        'type' => $faker->type,
        'attack' => $faker->attack,
        'defense' => $faker->defense,
        'hp' => $faker->hp,
    ];
});

/**
 * Factory definition for model App\Player.
 */
$factory->define(App\Player::class, function ($faker) {
    return [
        'name' => $faker->name,
        'level' => $faker->level,
        'max_hp' => $faker->max_hp,
        'actual_hp' => $faker->actual_hp,
        'max_xp' => $faker->max_xp,
        'actual_xp' => $faker->actual_xp,
        'strength' => $faker->strength,
        'agility' => $faker->agility,
        'inteligence' => $faker->inteligence,
        'vitality' => $faker->vitality,
        'attack' => $faker->attack,
        'defense' => $faker->defense,
    ];
});

/**
 * Factory definition for model App\Enemy.
 */
$factory->define(App\Enemy::class, function ($faker) {
    return [
        'name' => $faker->name,
        'level' => $faker->level,
        'max_hp' => $faker->max_hp,
        'actual_hp' => $faker->actual_hp,
        'xp_yield' => $faker->xp_yield,
        'attack' => $faker->attack,
        'defense' => $faker->defense,
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
