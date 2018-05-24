<?php

namespace App\Http\Controllers;

use App\Marcha_centrifuga;
use Illuminate\Http\Request;
use Auth;

class MarchaCentrifugaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcha_centrifugas=Marcha_centrifuga::orderBy('fecha', 'DESC')->orderBy('hora', 'DESC')->paginate(10);
        return view('marcha_centrifugas.index', compact('marcha_centrifugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $checked='Parada';
        return view('marcha_centrifugas.create', compact('checked'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marcha_centrifuga=new Marcha_centrifuga($request->all());
        $marcha_centrifuga->user_id = Auth::user()->id;
        $marcha_centrifuga->save();



        return redirect()->route('marcha_centrifugas.index', $marcha_centrifuga->id)
        ->with('info', 'Datos guardados con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marcha_centrifuga  $marcha_centrifuga
     * @return \Illuminate\Http\Response
     */
    public function show(Marcha_centrifuga $marcha_centrifuga)
    {
        return view('marcha_centrifugas.show', compact('marcha_centrifuga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marcha_centrifuga  $marcha_centrifuga
     * @return \Illuminate\Http\Response
     */
    public function edit(Marcha_centrifuga $marcha_centrifuga)
    {
        $checked=$marcha_centrifuga->estado;
        return view('marcha_centrifugas.edit', compact('marcha_centrifuga', 'checked'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marcha_centrifuga  $marcha_centrifuga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marcha_centrifuga $marcha_centrifuga)
    {
        $marcha_centrifuga->user_id = Auth::user()->id;


        $marcha_centrifuga->update($request->all());
        return redirect()->route('marcha_centrifugas.index', $marcha_centrifuga->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marcha_centrifuga  $marcha_centrifuga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marcha_centrifuga $marcha_centrifuga)
    {
        $marcha_centrifuga->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
