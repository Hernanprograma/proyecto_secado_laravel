<?php

namespace App\Http\Controllers;

use App\Centrifuga;
use Illuminate\Http\Request;
use Auth;

class CentrifugaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centrifugas=Centrifuga::orderBy('fecha', 'desc')->orderBy('hora', 'desc')->paginate(10);
        return view('centrifugas.index', compact('centrifugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centrifugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $centrifuga=new Centrifuga($request->all());
        $centrifuga->user_id = Auth::user()->id;
        $centrifuga->save();



        return redirect()->route('centrifugas.index', $centrifuga->id)
        ->with('info', 'Datos guardados con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Centrifuga  $centrifuga
     * @return \Illuminate\Http\Response
     */
    public function show(Centrifuga $centrifuga)
    {
        return view('centrifugas.show', compact('centrifuga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Centrifuga  $centrifuga
     * @return \Illuminate\Http\Response
     */
    public function edit(Centrifuga $centrifuga)
    {
        return view('centrifugas.edit', compact('centrifuga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Centrifuga  $centrifuga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centrifuga $centrifuga)
    {
        $centrifuga->update($request->all());
        return redirect()->route('centrifugas.index', $centrifuga->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Centrifuga  $centrifuga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centrifuga $centrifuga)
    {
        $centrifuga->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
