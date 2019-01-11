<?php

use App\Models\Proyecto;
use App\Models\Asesor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {           


//            $asesorId = DB::table('asesor')->where('Nombre','Hector De Jesus')->value('id');
 //           $empreId = DB::table('emprendedor')->where('Nombre','Albert Eduardo')->value('id');

           
            $empreId = DB::table('emprendedores')->where('Nombre','Albert Eduardo')->value('id');
        
             Proyecto::create([
        	'Folio' => '34567',
        	'Actividad' => 'Sector Extractivo',
        	'RazonSocial' => 'Mi razon de ser',
        	'RFC' => 'FG123456PQ3',
        	'NombreDirector' => 'Hector De Jesus Marroquin Gomez',
        	'TelefonoEmp' => '9876543212',
        	'CorreoEmp' => 'hector.coki@gmail.com',
        	'Propuesta' => 'Ser el mas chingon del pais',
        	'Propuestaotra' => 'Ser doblemente chingon en el mundo',
        	'NombreProd' => 'Drones con armas',
        	'Descripcion' => 'Matan lo que sea',
        	'Organizacion' => 'Carrillo',
        	'Cual' => '',
        	// 'asesor_id' => $asesorId,
        	'emprendedor_id' => $empreId,
		]);
		
		Proyecto::create([
        	'Folio' => '34565',
        	'Actividad' => 'Sector Agronomico',
        	'RazonSocial' => 'Mi razon de ser',
        	'RFC' => 'FG123456PQ3',
        	'NombreDirector' => 'Hector De Jesus Marroquin Gomez',
        	'TelefonoEmp' => '9876543212',
        	'CorreoEmp' => 'hector.coki@gmail.com',
        	'Propuesta' => 'Ser el mas chingon del pais',
        	'Propuestaotra' => 'Ser doblemente chingon en el mundo',
        	'NombreProd' => 'Bebida De Algas',
        	'Descripcion' => 'Matan lo que sea',
        	'Organizacion' => 'Carrillo',
        	'Cual' => '',
        	// 'asesor_id' => $asesorId,
        	'emprendedor_id' => $empreId,
        ]);

        factory(Proyecto::class, 20)->create([
            'Folio' => '53245234',
            'TelefonoEmp' => '9876543212',
            'emprendedor_id' => $empreId
        ]);
    }
}
