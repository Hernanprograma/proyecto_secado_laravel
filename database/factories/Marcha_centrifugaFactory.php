<?php

use Faker\Generator as Faker;

$factory->define(App\Marcha_centrifuga::class, function (Faker $faker) {
    return [
'centrifuga'=>$faker->randomElement($array = array('A','B','C')),
'estado'=>$faker->randomElement($array = array('En Marcha','Parada')),
'fecha'=>$faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Paris', $format = 'd-m-Y')->format('Y-m-d'),
'hora'=>$faker->time($format = 'H:i', $max = 'now', $timezone = 'Europe/Paris') ,
'incidencias'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
'user_id'=>App\User::all()->random()->id,

  ];
});
