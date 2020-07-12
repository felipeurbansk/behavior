<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\PostCategory::class, function (Faker $faker) {
    return [
        'post' => $faker->randomElement(\LaraDev\Post::all()->pluck('id')->toArray()),
        'category' => $faker->randomElement(\LaraDev\Category::all()->pluck('id')->toArray())
    ];
});
