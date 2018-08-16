<?php

use Faker\Generator as Faker;

/*
$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});
*/

$factory->define(App\GenderType::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->code,
        'description' => $faker->description
    ];
});
