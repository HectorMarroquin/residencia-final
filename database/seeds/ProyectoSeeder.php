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

           
            $empre1 = DB::table('emprendedores')->where('Nombre','Albert Eduardo')->value('id');
			$empre1 = DB::table('emprendedores')->where('Nombre','Albert Eduardo')->value('id');
			$empre2 = DB::table('emprendedores')->where('Nombre','Hector')->value('id');
			$empre2 = DB::table('emprendedores')->where('Nombre','Hector')->value('id');

             Proyecto::create([
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
        	'emprendedor_id' => $empre1,
		]);
		
		Proyecto::create([
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
        	'emprendedor_id' => $empre1,
        ]);

		Proyecto::create([
        	'Actividad' => 'Sector Industrial',
        	'RazonSocial' => 'Mi razon de ser',
        	'RFC' => 'FG123456PQ3',
        	'NombreDirector' => 'Hector De Jesus Marroquin Gomez',
        	'TelefonoEmp' => '9876543212',
        	'CorreoEmp' => 'hector.coki@gmail.com',
        	'Propuesta' => 'Ser el mas chingon del pais',
        	'Propuestaotra' => 'Ser doblemente chingon en el mundo',
        	'NombreProd' => 'Tienda de ropa',
        	'Descripcion' => 'Matan lo que sea',
        	'Organizacion' => 'Carrillo',
        	'Cual' => '',
        	// 'asesor_id' => $asesorId,
        	'emprendedor_id' => $empre1,
		]);
		
		Proyecto::create([
        	'Actividad' => 'Sector Agricola',
        	'RazonSocial' => 'Mi razon de ser',
        	'RFC' => 'FG123456PQ3',
        	'NombreDirector' => 'Hector De Jesus Marroquin Gomez',
        	'TelefonoEmp' => '9876543212',
        	'CorreoEmp' => 'hector.coki@gmail.com',
        	'Propuesta' => 'Ser el mas chingon del pais',
        	'Propuestaotra' => 'Ser doblemente chingon en el mundo',
        	'NombreProd' => 'Cafe Organico',
        	'Descripcion' => 'Matan lo que sea',
        	'Organizacion' => 'Carrillo',
        	'Cual' => '',
        	// 'asesor_id' => $asesorId,
        	'emprendedor_id' => $empre1,
        ]);
        // factory(Proyecto::class, 20)->create([
        //     'TelefonoEmp' => '9876543212',
        //     'emprendedor_id' => $empre2,
        // ]);
    }
}
