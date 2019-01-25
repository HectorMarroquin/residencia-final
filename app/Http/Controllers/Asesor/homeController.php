<?php

namespace App\Http\Controllers\Asesor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:asesor');
    }
    
	public function asesor(){

   		 return view('Asesor.inicio');
	}

	public function update(){

   		 return view('Asesor.inicio');
	}
}
