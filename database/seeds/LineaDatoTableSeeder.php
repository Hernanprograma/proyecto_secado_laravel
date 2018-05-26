<?php

use Illuminate\Database\Seeder;

class LineaDatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Linea_dato::class, 2000)->create();
    }
}
