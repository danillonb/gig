<?php

namespace App\Http\Controllers;

use App\Membro;
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
    public function dashboard()
    {

        $contadorMembrosAtivos = Membro::where('ativo', 1)->count();
        $contadorMembrosInativos = Membro::where('ativo', 0)->count();

        return view('dashboard', compact('contadorMembrosAtivos', 'contadorMembrosInativos'));
    }
}
