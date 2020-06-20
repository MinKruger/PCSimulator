<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'marca' => $faker->name,
        'modelo' => $faker->name,
        'descricao' => $faker->name
    ];
});
