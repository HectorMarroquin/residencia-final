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
        /*
 		$emprendedor = DB::table('emprendedores')->where('Nombre','Vanessa Jennifer')->value('id');
        
         Colaborador::create([ 
        	'NombreC' => 'Claire',
        	'ApellidoPC' => 'Azueto',
        	'ApellidoMC' => 'Escobar',
        	'CURPC' => 'AZESCL653454GHCSWY',
        	'emprendedor_id' => $emprendedor,
        ]);  

        Colaborador::create([ 
        	'NombreC' => 'Ronaldo Alain',
        	'ApellidoPC' => 'Cuello',
        	'ApellidoMC' => 'Jerez',
        	'CURPC' => 'CUJERO951223HCSRMC03',
        	'emprendedor_id' => $emprendedor,
        ]);

        Colaborador::create([ 
        	'NombreC' => 'Presiliano',
        	'ApellidoPC' => 'Roblero',
        	'ApellidoMC' => 'Bravo',
        	'CURPC' => 'ROBPE9659034HCSTRUO03',
        	'emprendedor_id' => $emprendedor,
        ]);

        Colaborador::create([ 
        	'NombreC' => 'Jesus Alberto',
        	'ApellidoPC' => 'Sanchez',
        	'ApellidoMC' => 'Selvas',
        	'CURPC' => 'SASJ940123RC066N5CJ9',
        	'emprendedor_id' => $emprendedor,
        ]);

        // Colaborador::create([ 
        // 	'NombreC' => 'Sanchez',
        // 	'ApellidoPC' => 'Sanchez',
        // 	'ApellidoMC' => 'Selvas',
        // 	'CURPC' => 'SASJ940123RC066N5CJ9',
        // 	'emprendedor_id' => $colaboradores_Id,
        // ]); */
    }
}
