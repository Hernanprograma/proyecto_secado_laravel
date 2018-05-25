<?php

use Illuminate\Database\Seeder;
use App\Turno;

class TurnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Turno::class, 100)->create();

        //       //Users
  //       Turno::create([
  //         'turno'  =>'MAÑANA',
  //         'description' =>'Turno desde las 6:00 a las 14:00 horas',
  // ]);
  //       Turno::create([
  //       'turno'  =>'TARDE',
  //       'description' =>'Turno  desde las 14:00 a las 22:00 horas',
  // ]);
  //       Turno::create([
  //       'turno'  =>'NOCHE',
  //       'description' =>'Turno desde las 22:00 a las 6:00',
  // ]);
    }
}
