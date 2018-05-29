<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function homedata()
    {
        $sacos=DB::select("SELECT * from nivels
        order by created_at DESC limit 1;");
        //$sacos=DB::table('gasto_polis');

        //$sacos=$fechaini+$fechafin;

        return $sacos;
    }
}
