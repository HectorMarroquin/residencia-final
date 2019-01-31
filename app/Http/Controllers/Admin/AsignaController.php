<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\Emprendedor;
use App\Models\Asignacion;
use App\Models\Asesor;
use App\Http\Requests\AsignacionValidation;
class AsignaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
       // $this->middleware('roles:administrador');
    }
    
    public function index()
    {
        $emprendedores = Emprendedor::paginate(5);
        $asesores = Asesor::with('asignaciones')->get();
        return view('Administrador.asignar', compact('emprendedores','asesores'));
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
    public function store(AsignacionValidation $request)
    {   
         $id = $request->input('proyecto_id');

         $asignacion = Asignacion::create($request->all());
           
         $proyecto = Proyecto::where('id', $id)->first();
         $proyecto->Estado = 'Cursando';
         $proyecto->update();

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
        //
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
        // $proyecto = Proyecto::findOrFail($id);
        // $proyecto->update($request->all());
        // return redirect()->route('emprendedor.index');
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
