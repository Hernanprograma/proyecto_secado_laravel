<?php

use Illuminate\Database\Seeder;
use App\Linea_muestra;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(Poli_marcasTableSeeder::class);
        $this->call(CentrifugasTableSeeder::class);
        $this->call(SimbioticasTableSeeder::class);
        $this->call(LineaMuestraTableSeeder::class);
        $this->call(LineaDatoTableSeeder::class);
        $this->call(MarchaCentrifugaTableSeeder::class);
        $this->call(GastoPoliTableSeeder::class);
    }
}
