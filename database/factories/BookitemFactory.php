<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookitem;
use Faker\Generator as Faker;

$factory->define(Bookitem::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3,5),
        'book_code' => $faker->isbn10(),
        'pages' => rand(300,450),
        'description' => $faker->sentence(10),
        'author_id' => $faker->randomDigit(5)
    ];
});
