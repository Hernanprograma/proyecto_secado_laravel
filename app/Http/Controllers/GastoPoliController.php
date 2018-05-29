<?php

namespace App\Http\Controllers;

use App\Gasto_poli;
use App\Poli_marca;
use Illuminate\Http\Request;
use Auth;
use DB;

class GastoPoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gasto_polis=Gasto_poli::orderBy('fecha', 'desc')->orderBy('hora', 'desc')->paginate(5);


        //dd($gasto_polis);
        return view('gasto_polis.index', compact('gasto_polis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gasto_poli=Gasto_poli::orderBy('created_at', 'desc')->first();
        $marcas=Poli_marca::all();
        $selected=null;
        return view('gasto_polis.create', compact('gasto_poli', 'marcas', 'selected'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gasto_poli=new Gasto_poli($request->all());
        $marca=$request->get('marcas');
        $gasto_poli->marca_id=$marca;
        $gasto_poli->user_id = Auth::user()->id;
        $gasto_poli->save();



        return redirect()->route('gasto_polis.index', $gasto_poli->id)
        ->with('info', 'Has añadido un saco de poli');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gasto_poli  $gasto_poli
     * @return \Illuminate\Http\Response
     */
    public function show(Gasto_poli $gasto_poli)
    {
        return view('gasto_polis.show', compact('gasto_poli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gasto_poli  $gasto_poli
     * @return \Illuminate\Http\Response
     */
    public function edit(Gasto_poli $gasto_poli)
    {
        $selected=null;
        $marcas=Poli_marca::all();
        if (isset($gasto_poli->poli->id)) {
            $selected=$gasto_poli->poli->id;
        }


        return view('gasto_polis.edit', compact('gasto_poli', 'marcas', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gasto_poli  $gasto_poli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto_poli $gasto_poli)
    {
        $gasto_poli->user_id = Auth::user()->id;
        $gasto_poli->marca_id=$request->get('marcas');


        $gasto_poli->update($request->all());
        return redirect()->route('gasto_polis.index', $gasto_poli->id)
        ->with('info', 'Campos editados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gasto_poli  $gasto_poli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gasto_poli $gasto_poli)
    {
        $gasto_poli->delete();
        return back()->with('info', 'Eliminado correctamente');
    }

    public function informe()
    {
        return view('gasto_polis.informe');
    }
    public function sacospoli($fechaini, $fechafin)
    {
        $sacos=DB::select("SELECT u.name as operario ,a.fecha, a.hora, a.incidencias, p.name as marca
          FROM gasto_polis as a, users as u,poli_marcas as p WHERE u.id =a.user_id
          and  a.fecha  BETWEEN STR_TO_DATE('$fechaini','%Y-%m-%d') AND  STR_TO_DATE('$fechafin','%Y-%m-%d')
          order by a.fecha DESC, a.hora DESC;");
        //$sacos=DB::table('gasto_polis');

        //$sacos=$fechaini+$fechafin;

        return $sacos;
    }
}
