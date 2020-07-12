<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Post::class, function (Faker $faker) {

    $title = $faker->paragraph(1);
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'subtitle' => $faker->paragraph(1),
        'description' => $faker->paragraph(5),
        'author' => $faker->randomElement(\LaraDev\User::all()->pluck('id')->toArray())
    ];

});
