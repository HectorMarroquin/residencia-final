<?php

namespace App\Http\Controllers\Asesor;

use App\Models\Avance;
use App\Models\Foda;
use App\Models\Proyecto;
use auth;
use App\Models\Asesor;
use App\Models\Ideanegocio;
use Barryvdh\DomPDF\Facade as PDF;


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

  public function historial() {

    $asesor=Asesor::where('user_id', '=', auth()->id())->first();
;
                        
       // $users=Asignacion::where('asesor_id', $idd->id)->get();      
    return view('Asesor.historial',compact('asesor'));
  }


	public function update($id){

   		$avance=Avance::findOrFail($id);
      $avance->Comentario='Aprobado';
      $avance->update();    

       return back();
	}

    public function update1($id){

      $avance=Avance::findOrFail($id);
      $proyecto = Proyecto::where('id', $avance->proyecto_id)->first();
      $avance->Comentario='No Aprobado';
      $proyecto->Estado='No Aprobado';

      $proyecto->update();
      $avance->update();    

       return back();
  }

  public function show($id){
      $proyecto = Proyecto::findOrFail($id);
      $foda = Foda::where('proyecto_id', $proyecto->id)->first();
      $ideaNegocio = Ideanegocio::where('proyecto_id', $proyecto->id)->first();

      return view('Asesor.show-AltaProject', compact('proyecto','foda','ideaNegocio'));
  }

  public function download($id){
     $proyecto = Proyecto::findOrFail($id);
     $foda = Foda::where('proyecto_id', $proyecto->id)->first();
     $ideaNegocio = Ideanegocio::where('proyecto_id', $proyecto->id)->first();

       $pdf = PDF::loadview('Asesor.pdf.infoAltaProject', compact('proyecto','foda','ideaNegocio'));

         return $pdf->download();


  }


  public function downloadFile($id){
       $avance = Avance::findOrFail($id);
       $name=$avance->Comentario;
       $doc=public_path('Revisiones')."/".$name; 
       return response()->download($name); 
  }

}
