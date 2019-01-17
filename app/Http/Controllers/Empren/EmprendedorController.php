<?php

namespace App\Http\Controllers\Empren;

use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Models\Emprendedor;
use App\User;
use Auth;

use Illuminate\Http\Request;

use App\Http\Requests\CreateEmprenValidation;

class EmprendedorController extends Controller
{
	//public function __construct()
	//{
	//	$this->middleware('registro', ['only' => ['Home']]);

	//}
	public function Home()
	{
		$id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->value('id');
		return view('emprendedor', compact('empre'));
	}

	public function Validar(CreateEmprenValidation $request) 
	{
		$data = $request->all();

		return back();
	}

    
}
