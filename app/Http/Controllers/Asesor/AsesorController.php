<?php

namespace App\Http\Controllers\Asesor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Models\Role;
use App\Models\Asesor;
use App\Models\Emprendedor;
use App\Models\Colaborador;
use App\Http\Requests\AsesorValidacion;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //muestra los datos del asesor
    {

        $id = auth()->user()->id;
        $asesor = Asesor::where('user_id', $id)->first();

       return view('Asesor.show-asesor', compact('asesor'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //redirecciona para ser editado
    {
        $id = auth()->user()->id;
        $asesor = Asesor::where('user_id', $id)->first();

       return view('Asesor.edit-asesor', compact('asesor'));
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
    public function show($id) //ver alta de emprendedor
    {
        $emprendedor = Emprendedor::findOrFail($id);

        $ids = $emprendedor->id;    

        $colaborador =Colaborador::where('emprendedor_id', $ids)->get();

        return view('Asesor.show-AltaEmpre', compact('emprendedor','colaborador'));


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
    public function update(AsesorValidacion $request, $id)
    {
      $asesor = Asesor::findOrFail($id);
        $asesor->update($request->all());
        return redirect()->route('asesor.index');   
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
