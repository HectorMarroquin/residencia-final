<?php

namespace App\Http\Controllers\Empren;
use DB;
use Auth;
use App\User;
use Carbon\Carbon;
use App\Models\Proyecto;
use App\Models\Emprendedor;
use App\Models\Foda;
use App\Models\Ideanegocio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoValidacion;

class ProyectoRegisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Emprendedor.Altaproyecto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	//$proyectos = Proyecto::all();
    	//$emprendedores = Emprendedor::all();
    	//$asesores = Asesor::all();

        return view ('Emprendedor.Altaproyecto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoValidacion $request)
    { 
    
        
        $proyecto = new Proyecto;
        $proyecto->Folio = $request->input('');
        $proyecto->Actividad = $request->input('Actividad');
        $proyecto->Razonsocial = $request->input('Razonsocial');
        $proyecto->RFC = $request->input('RFC');
        $proyecto->NombreDirector = $request->input('NombreDirector');
        $proyecto->Telefonoemp = $request->input('Telefonoemp');
        $proyecto->CorreoEmp = $request->input('CorreoEmp');
        $proyecto->Propuesta = $request->input('Propuesta');
        $proyecto->PropuestaOtra = $request->input('PropuestaOtra');
        $proyecto->NombreProd = $request->input('NombreProd');
        $proyecto->Descripcion = $request->input('Descripcion');
        $proyecto->Organizacion = $request->input('Organizacion');
        $proyecto->Cual = $request->input('Cual');

        $id = Auth()->user()->id;
        $empreId = Emprendedor::where('user_id', $id)->value('id');
        $proyecto->emprendedor_id = $empreId;
        $proyecto->save();

    
        $foda = new Foda;
        $foda->Fortaleza = $request->input('Fortaleza');
        $foda->Oportunidades = $request->input('Oportunidades');
        $foda->Debilidades = $request->input('Debilidades');
        $foda->Amenazas = $request->input('Amenazas');
        $foda->proyecto_id = $proyecto->id;
        $foda->save();

    	
        if ($request->hasFile('croquis')) {
            $file = $request->file('croquis');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/croquis/', $name);
        }

        $idea = new Ideanegocio;
        $idea->definicion = $request->input('definicion');
        $idea->croquis = $name;
        $idea->tipodomicilio = $request->input('tipodomicilio');
        $idea->tipoasentamiento = $request->input('tipoasentamiento');
        $idea->tipoasenotro = $request->input('tipoasenotro');
        $idea->nombreasentamiento = $request->input('nombreasentamiento');
        $idea->numerointerior = $request->input('numerointerior');
        $idea->numeroexterior = $request->input('numeroexterior');
        $idea->localidad = $request->input('localidad');
        $idea->municipio = $request->input('municipio');
        $idea->estado = $request->input('estado');
        $idea->codigopostal = $request->input('codigopostal');
        $idea->superficie = $request->input('superficie');
        $idea->refencia = $request->input('refencia');
        $idea->proyecto_id = $proyecto->id;
        $idea->save();

        return redirect()->route('AlProyecto.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
}
