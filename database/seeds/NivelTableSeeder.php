<?php

use Illuminate\Database\Seeder;

class NivelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nivel::class, 400)->create();
    }
}
