<?php

use Faker\Generator as Faker;

$factory->define(App\Tarea::class, function (Faker $faker) {
    return [


      'hora'=>$faker->time($format = 'H:i', $max = 'now', $timezone = 'Europe/Paris') ,
      'descripcion'=>$faker->randomElement($array = array('Hice esto o aquello','Hice lo de más allá','Cortar el cesped ','Regar','Medir Silos')),
      'user_id'=>App\User::all()->random()->id,
      'turno_id'=>App\Turno::all()->random()->id,

    ];
});
