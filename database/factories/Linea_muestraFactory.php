<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Linea_muestra::class, function (Faker $faker) {
    return [
      'fecha'=>$faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Paris', $format = 'd-m-Y')->format('Y-m-d'),
      'hora'=>$faker->time($format = 'H:i', $max = 'now', $timezone = 'Europe/Paris') ,
      'linea'=>$faker->randomElement($array = array('A','B')),
      'sequedadentrada'=>$faker->randomFloat(2, 16, 23),
      'sequedadsalida'=>$faker->randomFloat(2, 75, 98),
      'tt1'=>$faker->numberBetween(42, 50),
      'tt2'=>$faker->numberBetween(27, 60),
      'tt3'=>$faker->numberBetween(220, 300),
      'tt4'=>$faker->numberBetween(220, 300),
      'intensidadtambor'=>$faker->numberBetween(50, 200),
      'herziosbomba'=>$faker->randomFloat(2, 8, 22),
      'vueltasbomba'=>$faker->numberBetween(20, 40),
      'nivelsilo'=>$faker->numberBetween(0, 100),
      'posicionvalvula'=>$faker->numberBetween(4, 10),


      'user_id'=>App\User::all()->random()->id,









    ];
});
