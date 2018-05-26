<?php

use Illuminate\Database\Seeder;
use App\Gasto_poli;

class GastoPoliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Gasto_poli::class, 200)->create();
    }
}
