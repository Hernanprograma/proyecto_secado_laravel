<?php

use Illuminate\Database\Seeder;

class MarchaCentrifugaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Marcha_centrifuga::class, 100)->create();
    }
}
