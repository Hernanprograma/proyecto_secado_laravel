<?php

namespace App\Http\Controllers;

use App\Simbiotica;
use Illuminate\Http\Request;
use Auth;

class SimbioticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simbioticas=Simbiotica::orderBy('fecha', 'DESC')->orderBy('hora', 'DESC')->paginate(10);
        return view('simbioticas.index', compact('simbioticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('simbioticas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simbiotica=new Simbiotica($request->all());
        $simbiotica->user_id = Auth::user()->id;
        $simbiotica->save();



        return redirect()->route('simbioticas.index', $simbiotica->id)
        ->with('info', 'Datos guardados con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Simbiotica  $simbiotica
     * @return \Illuminate\Http\Response
     */
    public function show(Simbiotica $simbiotica)
    {
        return view('simbioticas.show', compact('simbiotica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Simbiotica  $simbiotica
     * @return \Illuminate\Http\Response
     */
    public function edit(Simbiotica $simbiotica)
    {
        return view('simbioticas.edit', compact('simbiotica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Simbiotica  $simbiotica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simbiotica $simbiotica)
    {
        $simbiotica->user_id = Auth::user()->id;


        $simbiotica->update($request->all());
        return redirect()->route('simbioticas.index', $simbiotica->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Simbiotica  $simbiotica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simbiotica $simbiotica)
    {
        $simbiotica->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
