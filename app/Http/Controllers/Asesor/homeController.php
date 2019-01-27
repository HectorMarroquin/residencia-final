<?php

namespace App\Http\Controllers\Asesor;

use App\Models\Avance;


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

	public function update($id){

   		$avance=Avance::findOrFail($id);
      $avance->Comentario='aprobado';
      $avance->update();    

       return back();
	}

    public function update1($id){

      $avance=Avance::findOrFail($id);
      $avance->Comentario='noaprobado';
      $avance->update();    

       return back();
  }
}
