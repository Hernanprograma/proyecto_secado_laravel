<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 2)->create();
        User::create([
          'name' =>'Hernan',
          'surname' =>'Rodríguez',
          'email' => 'hernan.r.valls@gmail.com',
          'password'  => bcrypt('123456'),
          ]);
          
        Role::create([
          'name'    => 'Admin',
          'slug'    => 'admin',
          'special' =>'all-access'
        ]);
        Role::create([
          'name'    => 'Trabajador',
          'slug'    => 'trabajador',
          'special' =>'no-access'
        ]);
        //cuando creamos el seeder añado el rol administrador a el usuario admin que yo quiero.
        $user=User::where('email', 'hernan.r.valls@gmail.com') -> first();
        $user->assignRole(1);
    }
}
