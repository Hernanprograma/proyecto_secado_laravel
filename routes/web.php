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
});
