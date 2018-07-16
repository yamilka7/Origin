<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [
        'Year' => $faker->year('now'),
        'Make' => $faker->randomElement(['Honda','Ford', 'Toyota']),
        'Model' => $faker->randomLetter
    ];
});
