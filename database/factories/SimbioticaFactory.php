<?php

use Faker\Generator as Faker;

$factory->define(App\Simbiotica::class, function (Faker $faker) {
    return [

  'caudal'=>$faker->randomFloat(2, 6, 6.20),
  'totalizado'=>$faker->numberBetween(20000, 400000),
  'fecha'=>$faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Paris', $format = 'd-m-Y')->format('Y-m-d'),
  'hora'=>$faker->time($format = 'H:i', $max = 'now', $timezone = 'Europe/Paris') ,
  'incidencias'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
  'user_id'=>App\User::all()->random()->id,

    ];
});
