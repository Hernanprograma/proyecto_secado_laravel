<?php

use Illuminate\Database\Seeder;

class SimbioticasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Simbiotica::class, 3000)->create();
    }
}
