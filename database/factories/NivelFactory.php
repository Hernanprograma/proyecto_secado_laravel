<?php

use Faker\Generator as Faker;

$factory->define(App\Nivel::class, function (Faker $faker) {
    return [
      'fecha'=>$faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Paris', $format = 'd-m-Y')->format('Y-m-d'),
      'hora'=>$faker->time($format = 'H:i', $max = 'now', $timezone = 'Europe/Paris') ,
      'nivel_seco_a'=>$faker->numberBetween(0, 100),
      'nivel_seco_b'=>$faker->numberBetween(0, 100),
      'silo_nuevo'=>$faker->numberBetween(40, 140),
      'silo_almacen'=>$faker->numberBetween(10, 100),
      'digestor'=>$faker->numberBetween(-20, 60),
      'tolva_recepcion'=>$faker->randomElement($array = array('Vacia','Llena','Por la mitad','Dos tercios')),
      'gas'=>$faker->randomFloat(2, 0.2, 2.4),
      'linea_a'=>$faker->randomElement($array = array('En Marcha','Parada')),
      'linea_b'=>$faker->randomElement($array = array('En Marcha','Parada')),
      'centrifuga_a'=>$faker->randomElement($array = array('En Marcha','Parada')),
      'centrifuga_b'=>$faker->randomElement($array = array('En Marcha','Parada')),
      'centrifuga_c'=>$faker->randomElement($array = array('En Marcha','Parada')),
      'user_id'=>App\User::all()->random()->id,

      




    ];
});
