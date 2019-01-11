<?php

use App\Models\Colaborador;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
 		$colaboradores_Id = DB::table('emprendedores')->value('id');
         Colaborador::create([ 
        	'NombreC' => 'Hector de jesus',
        	'ApellidoPC' => 'Marroquin',
        	'ApellidoMC' => 'Gomez',
        	'CURPC' => '1762412mcph123d',
        	'emprendedor_id' => $colaboradores_Id,
        ]);  
    }
}
