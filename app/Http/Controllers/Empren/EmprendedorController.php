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
		return view('LayoutsEmpren');
	}

	public function RegisEmpre()
	{
		return view('Emprendedor/Altaemprendedor');
	}

	public function RegisProy()
	{
		return view('Emprendedor/Altaproyecto');
	}

	public function Entreproy()
	{
		return view('Emprendedor/Entregas');
	}

	public function Estadproy()
	{
		return view('Emprendedor/Estatus');
	}

	public function ListEntre()
	{
		return view('Emprendedor/ListaEntregas');	
	}

	public function ListEsta()
	{
		return view('Emprendedor/ListaEstatus');
	}

	public function Entregadoc() 
	{
		return view('Emprendedor/Entregadoc');

	}

	public function Obervacion() 
	{
		return view('Emprendedor/Observaciones');

	}
	public function Validar(CreateEmprenValidation $request) 
	{
		$data = $request->all();

		return back();
	}

    
}
