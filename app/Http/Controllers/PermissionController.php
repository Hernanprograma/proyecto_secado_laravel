<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos=Permission::paginate();
        return view('permisos.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permiso)
    {
        return view('permisos.show', compact('permiso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permiso
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permiso)
    {
        $permisos=Permission::get();
        return view('permisos.edit', compact('permiso', 'permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permiso=Permission::create($request->all());

        return redirect()->route('permisos.edit', $permiso->id)
        ->with('info', 'Permiso guardado con éxito');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permiso)
    {   //actualizar usuario
        $permiso->update($request->all());

        //actualizar permisos
        //$permiso->permisos()->sync($request->get('permisos'));

        return redirect()->route('permisos.edit', $permiso->id)
        ->with('info', 'Permiso actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permiso)
    {
        $permiso->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
