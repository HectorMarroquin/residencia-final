<?php

use App\Models\Proyecto;
use App\Models\Asesor;
use App\Models\Emprendedor;
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
/*
           
          	$empre1 = Emprendedor::where('Nombre','Vanessa Jennifer')->value('id');

             Proyecto::create([
        	'Actividad' => 'Sector Servicio ó Orientado a Cosumidores',
        	'RazonSocial' => 'Food Movile',
        	'RFC' => 'FOMO142130Z12',
        	'NombreDirector' => 'Vannesa Jennifer Aguilar Padilla',
        	'TelefonoEmp' => '9611402030',
        	'CorreoEmp' => 'vanessa@gmail.com',
        	'Propuesta' => 'Servicio',
        	'Propuestaotra' => '',
        	'NombreProd' => 'Food Mobile',
        	'Descripcion' => 'La empresa se encuentra inspirada en las terminales de transporte que se encuentran en la avenida central, por lo cual se decidio adoptar la idea de un transporte de comida, que se encarga de llevar preparado diferentes tipos de guisos como son el pastor, res y cochito, los cuales se usaran para los tacos suaves y fritos',
        	'Organizacion' => 'Si',
        	'Cual' => 'Camara de la industria',
        	'Estado'=> 'Cursando',
        	'emprendedor_id' => $empre1,
		]);
		
		Proyecto::create([
        	'Actividad' => 'Sector Servicio ó Orientado a Cosumidores',
        	'RazonSocial' => 'Hexagon',
        	'RFC' => 'HE142030Z18',
        	'NombreDirector' => 'Osvaldo De Jesus Chacon Perez',
        	'TelefonoEmp' => '9611723090',
        	'CorreoEmp' => 'hexagon@gmail.com',
        	'Propuesta' => 'Servicio',
        	'Propuestaotra' => '',
        	'NombreProd' => 'Hexagon',
        	'Descripcion' => 'Papeleria Hexagon se dedica a la venta de articulos escolares, papeleria, servicio de fotocopiado, engargolados e impresiones en mayoreo y menudeo. Manejamos productos escolares desde kinder hasta universidad y una extensa variedad de articulos de oficina, para que le cliente, encuentre siempre lo que busca en la papeleria',
        	'Organizacion' => 'Si',
        	'Cual' => 'Camara de la industria',
        	'Estado'=> 'Cursando',
        	'emprendedor_id' => $empre1,
        ]);

		
        // factory(Proyecto::class, 20)->create([
		// 	'TelefonoEmp' => '9876543212',
		// 	'Estado' => 'Iniciado',
        //     'emprendedor_id' => $empre1,
        // ]); 
        */
    }
}
