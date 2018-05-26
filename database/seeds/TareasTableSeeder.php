<?php

use Illuminate\Database\Seeder;

class TareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tarea::class, 5000)->create();
    }
}
