<?php

namespace App\Http\Controllers\Asesor;

use App\User;
use Auth;
use App\Models\Role;
use App\Models\Asesor;
use App\Models\Asignacion;
use App\Models\Proyecto;
use App\Models\Colaborador;
use App\Email;
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

        return view('Asesor.proyectos', compact('users'));  
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $ids = Proyecto::findOrFail($id); 

          $files= Email::get();
            
          $idEmpred = $ids['emprendedor_id'];

          $colaborador= Colaborador::where('emprendedor_id', $idEmpred)->get();

        return view('Asesor.show-proyecto',compact('ids','colaborador','files'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $archivo=Email::findOrFail($id);
        $file_rute=$archivo->file;
        $ruta=public_path('correo')."/".$file_rute; 
        
        return response()->download($ruta); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
