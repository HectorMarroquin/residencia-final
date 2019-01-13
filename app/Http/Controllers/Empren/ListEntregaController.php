<?php

namespace App\Http\Controllers\Empren;

use DB;
use Carbon\Carbon;
use App\Models\Emprendedor;
use App\User;
use Auth;
use App\Models\Proyecto;
use App\Models\Asignacion;
use App\Models\Asesor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListEntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth()->user()->id;
        $empreId = Emprendedor::where('user_id', $id)->value('id');
        $proyectos = Proyecto::where('emprendedor_id', $empreId)->get();
        $proyectoss = Proyecto::where('emprendedor_id', $empreId)->value('id');
        $asignaciones = Asignacion::where('proyecto_id', $proyectoss)->get();
        //$asesor = DB::table('asignaciones')->select('asesor_id')->take(1)->value('id');
        //$asesorva = Asesor::where('id', $asesor)->value('id');
        //$asesor =Asignacion::where('asesor_id', $asignaciones)->get();
        //$asesorva = Asesor::where('user_id', $id)->value('id');
        return view ('Emprendedor.ListaEntregas', compact('asignaciones', 'proyectos', 'asesor', 'proyectoss', 'asesorva'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
