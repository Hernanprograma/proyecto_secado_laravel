<?php

namespace App\Http\Controllers;

use App\Nivel;
use Illuminate\Http\Request;
use Auth;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivels=Nivel::orderBy('created_at', 'desc')->paginate(5);
        return view('nivels.index', compact('nivels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivel=Nivel::orderBy('created_at', 'desc')->first();
        //dd($nivel);
        return view('nivels.create', compact('nivel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel=new Nivel($request->all());
        $nivel->user_id = Auth::user()->id;
        $nivel->save();



        return redirect()->route('nivels.index', $nivel->id)
        ->with('info', 'Datos guardados con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(Nivel $nivel)
    {
        return view('nivels.show', compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function edit(Nivel $nivel)
    {
        return view('nivels.edit', compact('nivel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nivel $nivel)
    {
        $nivel->user_id = Auth::user()->id;


        $nivel->update($request->all());
        return redirect()->route('nivels.index', $nivel->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivel $nivel)
    {
        $nivel->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
