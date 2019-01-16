<?php

namespace App\Http\Controllers\Empren;

use App\Http\Controllers\Controller;

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
		return view('emprendedor');
	}

	public function Validar(CreateEmprenValidation $request) 
	{
		$data = $request->all();

		return back();
	}

    
}
