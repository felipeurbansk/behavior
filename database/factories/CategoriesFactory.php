<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Categories::class, function (Faker $faker) {
    $title = $faker->sentence(10);

    return [
        'title' => $title,
        'slug' => str_slug($title)
    ];
});
