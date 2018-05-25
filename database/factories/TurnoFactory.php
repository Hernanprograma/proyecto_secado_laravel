<?php

use Faker\Generator as Faker;

$factory->define(App\Turno::class, function (Faker $faker) {
    return [
      'turno'=>$faker->randomElement($array = array('MAÑANA','TARDE','NOCHE')),
      'fecha'=>$faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Paris', $format = 'd-m-Y')->format('Y-m-d'),
      'hora'=>$faker->time($format = 'H:i', $max = 'now', $timezone = 'Europe/Paris') ,
      'user_id'=>App\User::all()->random()->id,
    

    ];
});
