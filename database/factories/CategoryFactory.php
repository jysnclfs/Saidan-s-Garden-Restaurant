<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'image' => 'default.jpg',
        'display_order' => 1 
    ];
});
