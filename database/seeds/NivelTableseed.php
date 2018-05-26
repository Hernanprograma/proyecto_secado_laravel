<?php

use Illuminate\Database\Seeder;

class NivelTableseed extends Seeder
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
