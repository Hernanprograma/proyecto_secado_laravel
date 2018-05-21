<?php

use Illuminate\Database\Seeder;


class Poli_marcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Poli_marca::class, 5)->create();

    }
}
