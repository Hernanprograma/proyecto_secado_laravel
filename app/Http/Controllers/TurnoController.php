<?php

namespace App\Http\Controllers;

use App\Turno;
use App\Tarea;
use Illuminate\Http\Request;
use Auth;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos=Turno::orderBy('fecha', 'desc')->orderBy('hora', 'desc')->paginate(8);
        $tareas=Tarea::get();

        return view('turnos.index', compact('turnos', 'tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno=new Turno($request->all());
        $turno->user_id = Auth::user()->id;
        $turno->save();

        return redirect()->route('turnos.index', $turno->id)
        ->with('info', 'Has creado el turno');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function show(Turno $turno)
    {
        return view('turnos.show', compact('turno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function edit(Turno $turno)
    {
        return view('turnos.edit', compact('turno'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turno $turno)
    {
        $turno->user_id = Auth::user()->id;
        $turno->update($request->all());
        return redirect()->route('turnos.index', $turno->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turno $turno)
    {
        $turno->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
