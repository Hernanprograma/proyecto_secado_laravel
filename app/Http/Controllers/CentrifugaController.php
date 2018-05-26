<?php

namespace App\Http\Controllers;

use App\Centrifuga;
use Illuminate\Http\Request;
use Auth;
use DB;

class CentrifugaController extends Controller
{







    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centrifugas=Centrifuga::orderBy('fecha', 'desc')->orderBy('hora', 'desc')->paginate(5);
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
        $centrifuga->user_id = Auth::user()->id;


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




    public function informe()
    {
        return view('centrifugas.informe');
    }
    public function centrifugas($fechaini, $fechafin)
    {
        $centrifugas=DB::select("SELECT entrada, salida, centrifuga,
          consigna, va, vr, par, t_entrada, t_salida, vibracion,
          caudal_ent, marcapoli, caudal_poli, aspecto, fecha, hora
        FROM secado_termico.centrifugas WHERE fecha
        BETWEEN STR_TO_DATE('$fechaini','%Y-%m-%d') AND  STR_TO_DATE('$fechafin','%Y-%m-%d')
        order by fecha DESC, hora DESC;");
        //$sacos=DB::table('gasto_polis');

        //$sacos=$fechaini+$fechafin;

        return $centrifugas;
    }
}
