<?php

use Faker\Generator as Faker;

$factory->define(App\Poli_marca::class, function (Faker $faker) {
    return [
        'name'=>$faker->secondaryAddress,
        'peso'=>'25',
        'precio'=>$faker->numberBetween(100, 2000),
        'user_id'=>App\User::all()->random()->id,


    ];
});
