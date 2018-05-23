<?php

namespace App\Http\Controllers;

use App\Linea_muestra;
use Illuminate\Http\Request;
use Auth;

class LineaMuestraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linea_muestras=Linea_muestra::orderBy('fecha', 'desc')->orderBy('hora', 'desc')->paginate(5);
        return view('linea_muestras.index', compact('linea_muestras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linea_muestras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linea_muestra=new Linea_muestra($request->all());
        $linea_muestra->user_id = Auth::user()->id;
        $linea_muestra->save();



        return redirect()->route('linea_muestras.index', $linea_muestra->id)
        ->with('info', 'Datos guardados con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Linea_muestra  $linea_muestra
     * @return \Illuminate\Http\Response
     */
    public function show(Linea_muestra $linea_muestra)
    {
        return view('linea_muestras.show', compact('linea_muestra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Linea_muestra  $linea_muestra
     * @return \Illuminate\Http\Response
     */
    public function edit(Linea_muestra $linea_muestra)
    {
        return view('linea_muestras.edit', compact('linea_muestra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Linea_muestra  $linea_muestra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linea_muestra $linea_muestra)
    {
        $linea_muestra->user_id = Auth::user()->id;


        $linea_muestra->update($request->all());
        return redirect()->route('linea_muestras.index', $linea_muestra->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Linea_muestra  $linea_muestra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linea_muestra $linea_muestra)
    {
        $linea_muestra->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
