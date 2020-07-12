<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Category::class, function (Faker $faker) {
    $category = $faker->words(3, true);

    return [
        'name' => $category,
        'slug' => str_slug($category)
    ];
});
