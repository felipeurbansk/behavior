<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Comment::class, function (Faker $faker) {
    return [
        'post' => $faker->randomElement(\LaraDev\User::all()->pluck('id')->toArray()),
        'user' => $faker->randomElement(\LaraDev\User::all()->pluck('id')->toArray()),
        'content' => $faker->paragraph('1')
    ];
});
