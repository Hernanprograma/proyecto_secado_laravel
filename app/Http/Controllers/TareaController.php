<?php

namespace App\Http\Controllers;

use App\Tarea;
use App\Turno;
use Illuminate\Http\Request;
use Auth;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas=Tarea::orderBy('fecha', 'desc')->orderBy('hora', 'desc')->paginate(5);


        //dd($tareas);
        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Turno $turno)
    {
        //dd($turno);
        $turno_id=$turno->id;
        //dd($turno_id);
        $tareas=$turno->tareas;

        //dd($tareas->descripcion);


        return view('tareas.create', compact('tareas', 'turno_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Turno $turno)
    {
        $tarea=new Tarea($request->all());
        $tarea->user_id = Auth::user()->id;
        $tarea->save();




        return redirect()->route('tareas.create', $tarea->turno_id)
        ->with('info', 'Has añadido una tarea');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return view('tareas.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        $selected=null;
        $turnos=Turno::all();
        if (isset($tarea->poli->id)) {
            $selected=$tarea->poli->id;
        }


        return view('tareas.edit', compact('tarea', 'turnos', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        $tarea->user_id = Auth::user()->id;
        $tarea->turno_id=$request->get('turnos');


        $tarea->update($request->all());
        return redirect()->route('tareas.index', $tarea->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
