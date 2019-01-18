<?php

namespace App\Http\Controllers\Empren;

use App\Models\Emprendedor;
use App\Models\Fase;
use App\Models\Avance;
use App\Models\Proyecto;
use App\Models\Revision;
use DB;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstatusController extends Controller
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
        $proyectos = Proyecto::findOrFail($id);
        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->value('id');

        $idpro = $proyectos->id;
        //$empreId = Emprendedor::where('user_id', $id)->value('id');
        //$avancess = Avance::where('proyecto_id', $idpro)->value('fase_id');
        $avances = Avance::where('proyecto_id', $proyectos)->get();
        $avancess = Avance::where('proyecto_id', $idpro)->value('id');
        $revisiones = Revision::where('avance_id', $avancess)->get();
        //$fase = Fase::all();
        //$avances = Avance::where('proyecto_id', $idpro)->get();
        //$avances = Avance::all();
         
        return view ('Emprendedor.ListaEstatus', compact('proyectos', 'empre', 'revisiones'));
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
