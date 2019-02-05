<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyecto;
class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('roles:administrador');
    }
	public function Admin(){

   		 return view('Administrador/dashboard');
	}

}
