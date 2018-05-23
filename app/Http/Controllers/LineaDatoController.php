<?php

namespace App\Http\Controllers;

use App\Linea_dato;
use Illuminate\Http\Request;
use Auth;

class LineaDatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linea_datos=Linea_dato::orderBy('fecha', 'desc')->orderBy('hora', 'desc')->paginate(5);
        return view('linea_datos.index', compact('linea_datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $linea_dato=Linea_dato::orderBy('created_at', 'desc')->first();
        //dd($linea_dato);
        return view('linea_datos.create', compact('linea_dato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linea_dato=new Linea_dato($request->all());
        $linea_dato->user_id = Auth::user()->id;
        $linea_dato->save();



        return redirect()->route('linea_datos.index', $linea_dato->id)
        ->with('info', 'Datos guardados con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Linea_dato  $linea_dato
     * @return \Illuminate\Http\Response
     */
    public function show(Linea_dato $linea_dato)
    {
        return view('linea_datos.show', compact('linea_dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Linea_dato  $linea_dato
     * @return \Illuminate\Http\Response
     */
    public function edit(Linea_dato $linea_dato)
    {
        return view('linea_datos.edit', compact('linea_dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Linea_dato  $linea_dato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linea_dato $linea_dato)
    {
        $linea_dato->user_id = Auth::user()->id;


        $linea_dato->update($request->all());
        return redirect()->route('linea_datos.index', $linea_dato->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Linea_dato  $linea_dato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linea_dato $linea_dato)
    {
        $linea_dato->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
