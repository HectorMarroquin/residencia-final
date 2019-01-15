<?php

namespace App\Http\Controllers\Empren;
use DB;
use Carbon\Carbon;
use App\Models\Emprendedor;
use App\Models\Colaborador;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Requests\EmprenValidation;

class EmprendedorRegisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        $id = Auth()->user()->id;
        $empreId = Emprendedor::where('user_id', $id)->get();
        //$proyectos = Proyecto::where('emprendedor_id', $empreId)->get();
        $pdf = PDF::loadView('pdf.Emprendedor', compact('empreId'));
         return $pdf->stream('emprendedor.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Emprendedor.Altaemprendedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmprenValidation $request)
    {
        //dd($request->all());
        //Emprendedor::create($request->all());
        $Emprendedor = new Emprendedor;
        $Emprendedor->Nombre = $request->input('Nombre');
        $Emprendedor->ApellidoP = $request->input('ApellidoP');
        $Emprendedor->ApellidoM = $request->input('ApellidoM');
        $Emprendedor->FechaNaci = $request->input('FechaNaci');
        $Emprendedor->Edad = $request->input('Edad');
        $Emprendedor->Sexo = $request->input('Sexo');
        $Emprendedor->EstadoCivil = $request->input('EstadoCivil');
        $Emprendedor->Direccion = $request->input('Direccion');
        $Emprendedor->NumeroExterior = $request->input('NumeroExterior');
        $Emprendedor->NumeroInterior = $request->input('NumeroInterior');
        $Emprendedor->Colonia= $request->input('Colonia');
        $Emprendedor->Ciudad= $request->input('Ciudad');
        $Emprendedor->Municipio= $request->input('Municipio');
        $Emprendedor->CodigoPostal= $request->input('CodigoPostal');
        $Emprendedor->TelefonoCel= $request->input('TelefonoCel');
        $Emprendedor->TelefonoOfi= $request->input('TelefonoOfi');
        $Emprendedor->TelefonoCasa= $request->input('TelefonoCasa');
        $Emprendedor->Correo= $request->input('Correo');
        $Emprendedor->Escolaridad= $request->input('Escolaridad');
        $Emprendedor->TipoPersona= $request->input('TipoPersona');
        $Emprendedor->CURP = $request->input('CURP');
        $Emprendedor->INE = $request->input('INE');
        $Emprendedor->RFC = $request->input('RFC');
        $Emprendedor->RFCM = $request->input('RFCM');
        $Emprendedor->RazonSocial = $request->input('RazonSocial');
        $Emprendedor->ObjetivoSocial = $request->input('ObjetivoSocial');
        $Emprendedor->TipoEmpresa = $request->input('TipoEmpresa');
        $Emprendedor->TipoOtra = $request->input('TipoOtra');
        $Emprendedor->user_id = Auth::User()->id;
        $Emprendedor->save();
    
        $colaborador = new Colaborador;
        $colaborador->NombreC = $request->input('NombreC');
        $colaborador->ApellidoPC = $request->input('ApellidoPC');
        $colaborador->ApellidoMC = $request->input('ApellidoMC');
        $colaborador->CURPC = $request->input('CURPC');
        $colaborador->emprendedor_id = $Emprendedor->id;
        $colaborador->save();
      //  Colaborador::create($request->all());
        return redirect()->route('Registro.create');      
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empre = Emprendedor::findOrFail($id);
        return view('Registro.show', compact('empre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $empre = Emprendedor::findOrFail($id);
        return view('Registro.edit', compact('empre')); 
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
