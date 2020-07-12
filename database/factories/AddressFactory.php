<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Address::class, function (Faker $faker) {
        return [
            'user' => $faker->randomElement(\LaraDev\User::all()->pluck('id')->toArray()),
            'address' => $faker->streetAddress(),
            'number' => $faker->randomNumber(4),
            'complement' => $faker->streetName(),
            'zipcode' => $faker->postcode(),
            'city' => $faker->city(),
            'state' => $faker->city()
        ];
});
