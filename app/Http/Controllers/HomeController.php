<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Humidade;
use App\Temperature;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $invoces = 0;
        return view('home', ["invoces"=> $invoces]);
    }

    public function registro(Request $request)
    {
        $invoces = 1;
        $nome = $request->nome;
        return view('home', ["invoces"=> $invoces, "form" => $request, "nome"=>$nome]);
    }

    public function imprimir(Request $request)
    {
        return view('print', ["form" => $request]);
    }
}
