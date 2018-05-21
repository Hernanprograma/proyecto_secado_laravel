<?php

use Illuminate\Database\Seeder;

class CentrifugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Centrifuga::class, 10)->create();
    }
}
