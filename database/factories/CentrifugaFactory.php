<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Centrifuga::class, function (Faker $faker) {
    return [

      'entrada'=>$faker->randomFloat(2, 1, 2.50),
      'salida'=>$faker->randomFloat(2, 18, 25),
      'centrifuga'=>$faker->randomElement($array = array('A','B','C')),
      'consigna'=>$faker->randomFloat(1, 42, 50),
      'va'=>3000,
      'vr'=>$faker->randomFloat(2, 3.50, 6.00),
      'par'=>$faker->randomFloat(1, 42, 50),
      't_entrada'=>$faker->randomFloat(1, 36, 70),
      't_salida'=>$faker->randomFloat(1, 36, 70),
      'vibracion'=>$faker->randomFloat(2, 0.60, 2.50),
      'caudal_ent'=>$faker->randomFloat(1, 18, 30),
      'marcapoli'=>'Tefloc TE80z',
      'caudal_poli'=>$faker->numberBetween(2000, 4000),
      'aspecto'=>'bien',
      'fecha'=>$faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Paris', $format = 'd-m-Y')->format('Y-m-d'),
      'hora'=>$faker->time($format = 'H:i', $max = 'now', $timezone = 'Europe/Paris') ,

      'user_id'=>App\User::all()->random()->id,
    ];
});
