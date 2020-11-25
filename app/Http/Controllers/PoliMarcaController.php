<?php
namespace App\Http\Controllers;

use App\Poli_marca;
use Illuminate\Http\Request;
use Auth;

class PoliMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poli_marcas=Poli_marca::orderBy('created_at', 'desc')->paginate();
        return view('poli_marcas.index', compact('poli_marcas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poli_marcas.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poli_marca=new Poli_marca($request->all());
        $poli_marca->user_id = Auth::user()->id;
        $poli_marca->save();

        //$poli_marca=Poli_marca::create($request->all());
        return redirect()->route('poli_marcas.index', $poli_marca->id)
        ->with('info', 'Marca Creada con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Poli_marca  $poli_marca
     * @return \Illuminate\Http\Response
     */
    public function show(Poli_marca $poli_marca)
    {
        return view('poli_marcas.show', compact('poli_marca'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poli_marca  $poli_marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Poli_marca $poli_marca)
    {
        return view('poli_marcas.edit', compact('poli_marca'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poli_marca  $poli_marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poli_marca $poli_marca)
    {
        $poli_marca->update($request->all());
        return redirect()->route('poli_marcas.index', $poli_marca->id)
        ->with('info', 'Campos editados con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poli_marca  $poli_marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poli_marca $poli_marca)
    {
        $poli_marca->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
