<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Role;
use App\Models\Asesor;
use App\Models\Asignacion;
use App\Models\Proyecto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AsesorValidacion;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $asesores = Asesor::paginate(5);
        // $asignaciones = Asignacion::with('asesor');
        // $proyectos = Proyecto::with('proyecto');
        return view('Administrador.show-asesores', compact('asesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.reg-asesor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsesorValidacion $request)
    {
        
        $asesor = $request->all();
        $role = Role::where('name','asesor')->first();
        
        $users = User::create([
            'name'=>$request->input('Nombre'),
            'email'=>$request->input('Correo'),
            'password'=>bcrypt($request->input('Contraseña')),
         ]);

         $users->roles()->attach($role); 
        
         $id = $users->id;
         $asesor['user_id'] = $id;
         Asesor::create($asesor);

         return redirect()->route('asesores.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Asesor::findOrFail($id)->delete();

        return redirect()->route('asesores.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesor = Asesor::findOrFail($id);

        return view('Administrador.shows', compact('asesor'));
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
        $asesor = Asesor::findOrFail($id);
        $asesor->update($request->all());
        return redirect()->route('asesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asesor::findOrFail($id)->delete();

        return redirect()->route('asesores.index');
    }
}
