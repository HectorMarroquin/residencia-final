<?php

namespace App\Http\Controllers;

use Auth;
use App\Role;
use App\User;
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
       if(Auth::user()->hasRole('administrador')){

            return view('Administrador/dashboard');
        }

        elseif(Auth::user()->hasRole('asesor')){

            return view('Asesor/ver-proyecto');
        }

        elseif(Auth::user()->hasRole('emprendedor')){

            return view('LayoutsEmpren');
        }
    }
}
