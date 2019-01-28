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
use App\Models\Avance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnviarDocValidation;
use App\Http\Requests\EnviarDoc2Validation;
use App\Http\Requests\EnviarDoc3Validation;

class EnvioController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:emprendedor');
    }

    public function index()
    {
        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->first();
        return view ('Emprendedor/dashboard', compact('empre'));
    }


     public function create()
    {
       
    }



     public function store(EnviarDocValidation $request)
    {
         if ($request->hasFile('documento1')) {
            $file = $request->file('documento1');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/Revisiones/', $name);
        }
            $avance = new Avance;
            $avance->NumeroEntrega = $request->input('numeroentrega');
            $avance->Documento = $name;
            $avance->proyecto_id = $request->input('proyecto');
            $avance->fase_id = $request->input('fase');
            $avance->save();
            return back()->with('infor1', 'Entrega Uno Realizada');  
    }

    public function entregados(EnviarDoc2Validation $request)
    {
    	  if ($request->hasFile('documento2')) {
            $files = $request->file('documento2');
            $names = time().$files->getClientOriginalName();
            $files->move(public_path().'/Revisiones/', $names);
        }
            $avance = new Avance;
            $avance->NumeroEntrega = $request->input('numeroentrega2');
            $avance->Documento = $names;
            $avance->proyecto_id = $request->input('proyecto2');
            $avance->fase_id = $request->input('fase2');
            $avance->save();
             return back()->with('infor2', 'Entrega Dos Realizada');
    }

    public function entregatres(EnviarDoc3Validation $request)
    {
    	 if ($request->hasFile('documento3')) {
            $filess = $request->file('documento3');
            $namess = time().$filess->getClientOriginalName();
            $filess->move(public_path().'/Revisiones/', $namess);
        }
            $avance = new Avance;
            $avance->NumeroEntrega = $request->input('numeroentrega3');
            $avance->Documento = $namess;
            $avance->proyecto_id = $request->input('proyecto3');
            $avance->fase_id = $request->input('fase3');
            $avance->save();

            return back()->with('infor3', 'Entrega tres Realizada');
    }


    public function show($pro, $fase)
	{
		$id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->value('id');
        
		$proyectos = Proyecto::findOrFail($pro);
		$fase = Fase::findOrFail($fase);
        $idpro = $proyectos->id;
        $idfase = $fase->id;
        $avance = Avance::where('NumeroEntrega', '=', 1)->where('proyecto_id', $idpro)->where('fase_id', $idfase)->value('id');
        $avancedos = Avance::where('NumeroEntrega', '=', 2)->where('proyecto_id', $idpro)->where('fase_id', $idfase)->value('id');
         $avancetres = Avance::where('NumeroEntrega', '=', 3)->where('proyecto_id', $idpro)->where('fase_id', $idfase)->value('id');

    
        return view ('Emprendedor.Entregadoc', compact('proyectos', 'fase', 'empre', 'avance', 'avancedos', 'avancetres'));
	}


	public function edit($id)
    {
        $avance = Avance::findOrFail($id);
        $name=$avance->Comentario;
        $doc=public_path('Revisiones')."/".$name; 

        return response()->download($doc); 
    }


	public function update(Request $request, $id)
    {
        //
    }

     public function destroy($id)
    {
        //
    }




}
