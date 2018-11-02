<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['firstName[]'=>'ford', 'honda', 'toyota']),
        'model' => $faker->company(),
        'year' => $faker->date(),

    ];
});

