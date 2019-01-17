<?php

namespace App\Http\Controllers\Asesor;

use App\User;
use Auth;
use App\Models\Actividad;
use App\Models\Asesor;
use App\Models\Asignacion;
use App\Models\Proyecto;
use App\Models\Colaborador;
use App\Models\Avance;
use App\Models\Revision;
use DB;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //proyectos = User::where('id', '!=', auth()->id())->get();
        $idd=Asesor::where('user_id', '=', auth()->id())->first();
        
        $id=$idd->id;
                
        $users=Asignacion::where('asesor_id', $id)->get();    

    

        return view('Asesor.proyectos', compact('users','files'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $actividades=Actividad::get();  

          $ids = Proyecto::findOrFail($id); 

          $id_project = $ids->id;  

          $files=Avance::where('proyecto_id', $id_project)->get();         
            
          $idEmpred = $ids['emprendedor_id'];

          $colaborador= Colaborador::where('emprendedor_id', $idEmpred)->get();

        return view('Asesor.show-proyecto',compact('ids','colaborador','files','actividades'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)// metodo para descargar
    {
       
        $archivo=Avance::findOrFail($id);
        $file_rute=$archivo->Documento;
        $ruta=public_path('Revisiones')."/".$file_rute; 

        return response()->download($ruta); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //metodo para guardar lso archivos que envio como asesor
    {
            if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/Revisiones/', $name);
        }

        /*   $avance = new Revision;
            $avance->Documento = $name;
            $avance->avance_id = $;
            $avance->save(); */

            Revision::create([
            'Documento' => $name,
            'avance_id' => $ids,

            ]);
            
            return back();

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function download($id)
    {
        $archivo=Email::findOrFail($id);
        $file_rute=$archivo->file;
        $ruta=public_path('correo')."/".$file_rute; 
        
        return response()->download($ruta); 


    }
}
