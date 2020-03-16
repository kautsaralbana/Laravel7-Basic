<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sample;
use Faker\Generator as Faker;

$factory->define(Sample::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'detail' => $faker->text(),
    ];
});
