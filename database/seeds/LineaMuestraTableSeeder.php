<?php

use Illuminate\Database\Seeder;
use App\Linea_muestra;

class LineaMuestraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Linea_muestra::class, 100)->create();
    }
}
