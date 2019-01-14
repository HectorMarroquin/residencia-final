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
use App\Models\Fase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ArchivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/PrimerEntrega/', $name);
            
        } 
        if ($request->hasFile('documento1')) {
            $file = $request->file('documento1');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/SegundaEntrega/', $name);
           
        } 
        if ($request->hasFile('documento2')) {
            $file = $request->file('documento2');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/TercerEntrega/', $name);
           
        }

        $id = Auth()->user()->id;
        $empreId = Emprendedor::where('user_id', $id)->value('id');
        $proyectos = Proyecto::where('emprendedor_id', $empreId)->get();

        $avanse = new 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $proyectos = Proyecto::findOrFail($id);
        return view ('Emprendedor.Entregadoc', compact('proyectos'));
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
