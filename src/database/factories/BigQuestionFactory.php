<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BigQuestion;
use Faker\Generator as Faker;

$factory->define(BigQuestion::class, function (Faker $faker) {
    return [
        // nameにテスト文字列($faker->name)が入るようにする
        'name' => $faker->name,
    ];
});
