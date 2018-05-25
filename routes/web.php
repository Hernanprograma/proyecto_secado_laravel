<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes-- todas las rutas tienen la restriccion de inicio de sesion
Route::middleware(['auth'])->group(function () {


  //Roles
    Route::get('roles', 'RoleController@index')->name('roles.index')
  ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
  ->middleware('permission:roles.create');

    Route::post('roles/store', 'RoleController@store')->name('roles.store')
  ->middleware('permission:roles.create');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
  ->middleware('permission:roles.show');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
  ->middleware('permission:roles.edit');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
  ->middleware('permission:roles.edit');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
  ->middleware('permission:roles.destroy');


    //poli_marcas
    Route::get('poli_marcas', 'PoliMarcaController@index')->name('poli_marcas.index')
  ->middleware('permission:poli_marcas.index');

    Route::get('poli_marcas/create', 'PoliMarcaController@create')->name('poli_marcas.create')
  ->middleware('permission:poli_marcas.create');

    Route::post('poli_marcas/store', 'PoliMarcaController@store')->name('poli_marcas.store')
  ->middleware('permission:poli_marcas.create');

    Route::get('poli_marcas/{poli_marca}', 'PoliMarcaController@show')->name('poli_marcas.show')
  ->middleware('permission:poli_marcas.show');

    Route::get('poli_marcas/{poli_marca}/edit', 'PoliMarcaController@edit')->name('poli_marcas.edit')
  ->middleware('permission:poli_marcas.edit');

    Route::put('poli_marcas/{poli_marca}', 'PoliMarcaController@update')->name('poli_marcas.update')
  ->middleware('permission:poli_marcas.edit');

    Route::delete('poli_marcas/{poli_marca}', 'PoliMarcaController@destroy')->name('poli_marcas.destroy')
  ->middleware('permission:poli_marcas.destroy');

    //Users
    Route::get('users', 'UserController@index')->name('users.index')
  ->middleware('permission:users.index');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
  ->middleware('permission:users.show');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
  ->middleware('permission:users.edit');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
  ->middleware('permission:poli_marcas.edit');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
  ->middleware('permission:users.destroy');


    //centrifugas
    Route::get('centrifugas', 'CentrifugaController@index')->name('centrifugas.index')
->middleware('permission:centrifugas.index');

    Route::get('centrifugas/create', 'CentrifugaController@create')->name('centrifugas.create')
->middleware('permission:centrifugas.create');

    Route::post('centrifugas/store', 'CentrifugaController@store')->name('centrifugas.store')
->middleware('permission:centrifugas.create');

    Route::get('centrifugas/{centrifuga}', 'CentrifugaController@show')->name('centrifugas.show')
->middleware('permission:centrifugas.show');

    Route::get('centrifugas/{centrifuga}/edit', 'CentrifugaController@edit')->name('centrifugas.edit')
->middleware('permission:centrifugas.edit');

    Route::put('centrifugas/{centrifuga}', 'CentrifugaController@update')->name('centrifugas.update')
->middleware('permission:centrifugas.edit');

    Route::delete('centrifugas/{centrifuga}', 'CentrifugaController@destroy')->name('centrifugas.destroy')
->middleware('permission:centrifugas.destroy');

    //permisos
    Route::get('permisos', 'PermissionController@index')->name('permisos.index')
->middleware('permission:permisos.index');

    Route::get('permisos/create', 'PermissionController@create')->name('permisos.create')
->middleware('permission:permisos.create');

    Route::post('permisos/store', 'PermissionController@store')->name('permisos.store')
->middleware('permission:permisos.create');

    Route::get('permisos/{permiso}', 'PermissionController@show')->name('permisos.show')
->middleware('permission:permisos.show');

    Route::get('permisos/{permiso}/edit', 'PermissionController@edit')->name('permisos.edit')
->middleware('permission:permisos.edit');

    Route::put('permisos/{permiso}', 'PermissionController@update')->name('permisos.update')
->middleware('permission:permisos.edit');

    Route::delete('permisos/{permiso}', 'PermissionController@destroy')->name('permisos.destroy')
->middleware('permission:permisos.destroy');

    //Simbioticas
    Route::get('simbioticas', 'SimbioticaController@index')->name('simbioticas.index')
->middleware('permission:simbioticas.index');

    Route::get('simbioticas/create', 'SimbioticaController@create')->name('simbioticas.create')
->middleware('permission:simbioticas.create');

    Route::post('simbioticas/store', 'SimbioticaController@store')->name('simbioticas.store')
->middleware('permission:simbioticas.create');

    Route::get('simbioticas/{simbiotica}', 'SimbioticaController@show')->name('simbioticas.show')
->middleware('permission:simbioticas.show');

    Route::get('simbioticas/{simbiotica}/edit', 'SimbioticaController@edit')->name('simbioticas.edit')
->middleware('permission:simbioticas.edit');

    Route::put('simbioticas/{simbiotica}', 'SimbioticaController@update')->name('simbioticas.update')
->middleware('permission:simbioticas.edit');

    Route::delete('simbioticas/{simbiotica}', 'SimbioticaController@destroy')->name('simbioticas.destroy')
->middleware('permission:simbioticas.destroy');
});


//LineaMuestras
Route::get('linea_muestras', 'LineaMuestraController@index')->name('linea_muestras.index')
->middleware('permission:linea_muestras.index');

Route::get('linea_muestras/create', 'LineaMuestraController@create')->name('linea_muestras.create')
->middleware('permission:linea_muestras.create');

Route::post('linea_muestras/store', 'LineaMuestraController@store')->name('linea_muestras.store')
->middleware('permission:linea_muestras.create');

Route::get('linea_muestras/{linea_muestra}', 'LineaMuestraController@show')->name('linea_muestras.show')
->middleware('permission:linea_muestras.show');

Route::get('linea_muestras/{linea_muestra}/edit', 'LineaMuestraController@edit')->name('linea_muestras.edit')
->middleware('permission:linea_muestras.edit');

Route::put('linea_muestras/{linea_muestra}', 'LineaMuestraController@update')->name('linea_muestras.update')
->middleware('permission:linea_muestras.edit');

Route::delete('linea_muestras/{linea_muestra}', 'LineaMuestraController@destroy')->name('linea_muestras.destroy')
->middleware('permission:linea_muestras.destroy');

//LineaDatos
Route::get('linea_datos', 'LineaDatoController@index')->name('linea_datos.index')
->middleware('permission:linea_datos.index');

Route::get('linea_datos/create', 'LineaDatoController@create')->name('linea_datos.create')
->middleware('permission:linea_datos.create');

Route::post('linea_datos/store', 'LineaDatoController@store')->name('linea_datos.store')
->middleware('permission:linea_datos.create');

Route::get('linea_datos/{linea_dato}', 'LineaDatoController@show')->name('linea_datos.show')
->middleware('permission:linea_datos.show');

Route::get('linea_datos/{linea_dato}/edit', 'LineaDatoController@edit')->name('linea_datos.edit')
->middleware('permission:linea_datos.edit');

Route::put('linea_datos/{linea_dato}', 'LineaMuestraController@update')->name('linea_datos.update')
->middleware('permission:linea_datos.edit');

Route::delete('linea_datos/{linea_dato}', 'LineaMuestraController@destroy')->name('linea_datos.destroy')
->middleware('permission:linea_datos.destroy');



//MarchaCentrifugas
Route::get('marcha_centrifugas', 'MarchaCentrifugaController@index')->name('marcha_centrifugas.index')
->middleware('permission:marcha_centrifugas.index');

Route::get('marcha_centrifugas/create', 'MarchaCentrifugaController@create')->name('marcha_centrifugas.create')
->middleware('permission:marcha_centrifugas.create');

Route::post('marcha_centrifugas/store', 'MarchaCentrifugaController@store')->name('marcha_centrifugas.store')
->middleware('permission:marcha_centrifugas.create');

Route::get('marcha_centrifugas/{marcha_centrifuga}/edit', 'MarchaCentrifugaController@edit')->name('marcha_centrifugas.edit')
->middleware('permission:marcha_centrifugas.edit');

Route::put('marcha_centrifugas/{marcha_centrifuga}', 'MarchaCentrifugaController@update')->name('marcha_centrifugas.update')
->middleware('permission:marcha_centrifugas.edit');

Route::delete('marcha_centrifugas/{marcha_centrifuga}', 'MarchaCentrifugaController@destroy')->name('marcha_centrifugas.destroy')
->middleware('permission:marcha_centrifugas.destroy');


//GastoPolis
Route::get('gasto_polis', 'GastoPoliController@index')->name('gasto_polis.index')
->middleware('permission:gasto_polis.index');

Route::get('gasto_polis/create', 'GastoPoliController@create')->name('gasto_polis.create')
->middleware('permission:gasto_polis.create');

Route::post('gasto_polis/store', 'GastoPoliController@store')->name('gasto_polis.store')
->middleware('permission:gasto_polis.create');

Route::get('gasto_polis/{gasto_poli}/edit', 'GastoPoliController@edit')->name('gasto_polis.edit')
->middleware('permission:gasto_polis.edit');

Route::put('gasto_polis/{gasto_poli}', 'GastoPoliController@update')->name('gasto_polis.update')
->middleware('permission:gasto_polis.edit');

Route::delete('gasto_polis/{gasto_poli}', 'GastoPoliController@destroy')->name('gasto_polis.destroy')
->middleware('permission:gasto_polis.destroy');


//Turnos
Route::get('turnos', 'TurnoController@index')->name('turnos.index')
->middleware('permission:turnos.index');

Route::get('turnos/create', 'TurnoController@create')->name('turnos.create')
->middleware('permission:turnos.create');

Route::post('turnos/store', 'TurnoController@store')->name('turnos.store')
->middleware('permission:turnos.create');

Route::get('turnos/{turno}/edit', 'TurnoController@edit')->name('turnos.edit')
->middleware('permission:turnos.edit');

Route::put('turnos/{turno}', 'TurnoController@update')->name('turnos.update')
->middleware('permission:turnos.edit');

Route::delete('turnos/{turno}', 'TurnoController@destroy')->name('turnos.destroy')
->middleware('permission:turnos.destroy');

//Tareas
Route::get('tareas', 'TareaController@index')->name('tareas.index')
->middleware('permission:tareas.index');

Route::get('tareas/create{turno}', 'TareaController@create')->name('tareas.create')
->middleware('permission:tareas.create');

Route::post('tareas/store', 'TareaController@store')->name('tareas.store')
->middleware('permission:tareas.create');

Route::get('tareas/{tarea}/edit', 'TareaController@edit')->name('tareas.edit')
->middleware('permission:tareas.edit');

Route::put('tareas/{tarea}', 'TareaController@update')->name('tareas.update')
->middleware('permission:tareas.edit');

Route::delete('tareas/{tarea}', 'TareaController@destroy')->name('tareas.destroy')
->middleware('permission:tareas.destroy');
