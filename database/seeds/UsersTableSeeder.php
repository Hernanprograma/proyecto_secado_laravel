<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use Caffeinated\Shinobi\Models\Permission;

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
        User::create([
            'name' =>'Hernan Operario',
            'surname' =>'Rodríguez valls',
            'email' => 'hernanbenidorm@gmail.com',
            'password'  => bcrypt('123456'),
            ]);

        Role::create([
          'name'    => 'Admin',
          'slug'    => 'admin',
          'description'=>'Tiene acceso a todo el sistema',
          'special' =>'all-access'
        ]);
        Role::create([
          'name'    => 'Visor',
          'slug'    => 'visor',
          'description'=>'Tiene acceso a ver consultar y nada mas',
        ]);
        Role::create([
          'name'    => 'Operario de planta',
          'slug'    => 'operario',
          'description'=>'Es la persona que inserta los datos en la base de datos, aunque no podrá crear roles ni permisos',
        ]);
        Role::create([
            'name'    => 'Jefe de Planta',
            'slug'    => 'jefe',
            'description'=>'Puede asignar roles y permisos (no puede crear permisos ni roles)',
        ]);

        //cuando creamos el seeder añado el rol administrador a el usuario admin que yo quiero.
        $user=User::where('email', 'hernan.r.valls@gmail.com') -> first();
        $user->assignRole('admin');


        //$role=Role::where('slug', 'operario')->first();

        //$role->assignPermission(1, 2, 5, 10, 15, 16, 17, 18, 19, 20);


        // $user=User::where('email', 'hernanbenidorm@gmail.com') -> first();
        // $user->assignRole('operario');
    }
}
