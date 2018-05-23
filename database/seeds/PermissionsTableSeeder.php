<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        //Users
        Permission::create([
      'name'  =>'Navegar usuarios',
      'slug'  =>'users.index',
      'description' =>'Lista y navega todos los usuarios del sistema',
    ]);
        Permission::create([
      'name' =>'Ver detalle del usuario',
      'slug' =>'users.show',
      'description' =>'Ver en detalle cada usuario del sistema',
    ]);
        Permission::create([
      'name' =>'Edicion de usuarios',
      'slug' =>'users.edit',
      'description' =>'Editar cualquier dato de usuario del sistema',
    ]);
        Permission::create([
      'name' =>'Eliminar usuarios',
      'slug' =>'users.destroy',
      'description' =>'Eliminar cualquier usuario del sistema',
    ]);

        //Roles
        Permission::create([
      'name' =>'Navegar roles',
      'slug' =>'roles.index',
      'description' =>' Ver la ista y navega todos los roles del sistema',
    ]);
        Permission::create([
      'name' =>'Ver detalle de los roles',
      'slug' =>'roles.show',
      'description' =>'Ver en detalle cada roles del sistema',
    ]);
        Permission::create([
      'name' =>'Edicion de los roles',
      'slug' =>'roles.edit',
      'description' =>'Editar cualquier dato de roles del sistema',
    ]);
        Permission::create([
      'name' =>'Creacion de roles',
      'slug' =>'roles.create',
      'description' =>'Crea un rol en el sistema',
    ]);
        Permission::create([
      'name' =>'Eliminar roles',
      'slug' =>'roles.destroy',
      'description' =>'Eliminar cualquier rol del sistema',
    ]);

        //Permisos
        Permission::create([
      'name' =>'Navegar lista de datos Permisoss',
      'slug' =>'permisos.index',
      'description' =>'Lista y navega todos los datos de permisos',
      ]);
        Permission::create([
      'name' =>'Ver detalle de datos de Permisoss',
      'slug' =>'permisos.show',
      'description' =>'Ver en detalle los datos de los permisos del sistema',
      ]);
        Permission::create([
      'name' =>'Edicion de datos de Permisoss',
      'slug' =>'permisos.edit',
      'description' =>'Editar cualquier dato de datos permisos del sistema',
      ]);
        Permission::create([
      'name' =>'Creacion de datos de Permisoss',
      'slug' =>'permisos.create',
      'description' =>'Crea permisos en el sistema',
      ]);
        Permission::create([
      'name' =>'Eliminar permisos',
      'slug' =>'permisos.destroy',
      'description' =>'Eliminar cualquier permiso',
      ]);


        //Poli_marcas
        Permission::create([
      'name' =>'Ver lista marcas de poli',
      'slug' =>'poli_marcas.index',
      'description' =>'Lista y navega todas los marcas de poli del sistema',
      ]);
        Permission::create([
      'name' =>'Ver detalle de las marcas de poli',
      'slug' =>'poli_marcas.show',
      'description' =>'Ver en detalle cada una de marcas de poli del sistema',
      ]);
        Permission::create([
      'name' =>'Editar las marcas de poli',
      'slug' =>'poli_marcas.edit',
      'description' =>'Editar cualquier dato de marcas de poli del sistema',
      ]);
        Permission::create([
      'name' =>'Creacion de marcas de poli',
      'slug' =>'poli_marcas.create',
      'description' =>'Crea una marca de poli en el sistema',
      ]);
        Permission::create([
      'name' =>'Eliminar marcas de poli',
      'slug' =>'poli_marcas.destroy',
      'description' =>'Eliminar cualquier marca de poli del sistema',
      ]);

        //Centrífugas
        Permission::create([
      'name' =>'Ver lista de datos Centrifugas',
      'slug' =>'centrifugas.index',
      'description' =>'Lista y navega todos los datos de centrifugas',
      ]);
        Permission::create([
      'name' =>'Ver detalle de datos de Centrifugas',
      'slug' =>'centrifugas.show',
      'description' =>'Ver en detalle cada toma de datos de centrífugas del sistema',
      ]);
        Permission::create([
      'name' =>'Edicion de datos de Centrifugas',
      'slug' =>'centrifugas.edit',
      'description' =>'Editar cualquier dato de datos centrifugas del sistema',
      ]);
        Permission::create([
      'name' =>'Creacion de datos de Centrifugas',
      'slug' =>'centrifugas.create',
      'description' =>'Crea datos de centrifuga en el sistema',
      ]);
        Permission::create([
      'name' =>'Eliminar datos de Centrifugas',
      'slug' =>'centrifugas.destroy',
      'description' =>'Eliminar cualquier dato de una centífuga',
      ]);


        //Simbiotica
        Permission::create([
    'name' =>'Navegar lista de datos de la simbiótica',
    'slug' =>'simbioticas.index',
    'description' =>'Lista y navega todos los datos de simbioticas',
    ]);
        Permission::create([
    'name' =>'Ver detalle de datos de la simbiótica',
    'slug' =>'simbioticas.show',
    'description' =>'Ver en detalle los datos de la simbiotica en el sistema',
    ]);
        Permission::create([
    'name' =>'Edicion de datos de la simbiótica',
    'slug' =>'simbioticas.edit',
    'description' =>'Editar cualquier dato de datos simbioticas del sistema',
    ]);
        Permission::create([
    'name' =>'Creacion de datos de la simbiótica',
    'slug' =>'simbioticas.create',
    'description' =>'Crea datos de la simbiótica en el sistema',
    ]);
        Permission::create([
    'name' =>'Eliminar registro de la simbiótica',
    'slug' =>'simbioticas.destroy',
    'description' =>'Eliminar cualquier registro de  la simbiotica',
    ]);

        //Muestras linea
        Permission::create([
    'name' =>'Ver lista de muestras de la linea',
    'slug' =>'linea_muestras.index',
    'description' =>'Lista y navega por todas los registros de muestras de la linea en el sistema',
    ]);
        Permission::create([
    'name' =>'Ver detalle de las muestras de la linea',
    'slug' =>'linea_muestras.show',
    'description' =>'Ver en detalle cada una de los registros de la linea  en el sistema',
    ]);
        Permission::create([
    'name' =>'Editar las muestras de la linea',
    'slug' =>'linea_muestras.edit',
    'description' =>'Editar cualquier registro de muestras de la linea del sistema',
    ]);
        Permission::create([
    'name' =>'Creacion  de muestras de la linea',
    'slug' =>'linea_muestras.create',
    'description' =>'Crea una registro de muestras de la linea en el sistema',
    ]);
        Permission::create([
    'name' =>'Eliminar muestras de la linea',
    'slug' =>'linea_muestras.destroy',
    'description' =>'Eliminar cualquier registro de muestras de la linea del sistema',
    ]);
    }
}
