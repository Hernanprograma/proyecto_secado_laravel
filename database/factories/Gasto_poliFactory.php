<?php

use Faker\Generator as Faker;

$factory->define(App\Gasto_poli::class, function (Faker $faker) {
    return [

'fecha'=>$faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Paris', $format = 'd-m-Y')->format('Y-m-d'),
'hora'=>$faker->time($format = 'H:i', $max = 'now', $timezone = 'Europe/Paris') ,
'incidencias'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
'user_id'=>App\User::all()->random()->id,
'marca_id'=>App\Poli_marca::all()->random()->id,




  ];
});
