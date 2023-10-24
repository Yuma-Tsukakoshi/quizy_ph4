<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        // nameにテスト文字列($faker->name)が入るようにするあってる？
        $faker->name
    ];
});
