<?php
use App\Models\Ideanegocio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IdeanegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $proyectoId = DB::table('proyectos')->value('id'); 
        Ideanegocio::create([ 
        	'definicion' => 'es un proyecto muy bueno',
        	'croquis' => 'pdf',
        	'tipodomicilio' => '2 norte',
        	'tipoasentamiento' => '5343',
        	'tipoasenotro' => '',
        	'nombreasentamiento' => 'Candelaria',
        	'numerointerior' => '232',
        	'numeroexterior' => '3434',
        	'localidad' => 'cardenas',
        	'municipio' => 'cintalapa',
        	'estado' => 'chiapas',
        	'codigopostal' => '304040',
        	'superficie' => '4343434',
        	'refencia' => 'cuadra y media una cantina',
        	'proyecto_id' => $proyectoId,
		]);
		
		Ideanegocio::create([ 
        	'definicion' => 'es un proyecto muy bueno',
        	'croquis' => 'pdf',
        	'tipodomicilio' => '2 norte',
        	'tipoasentamiento' => '5343',
        	'tipoasenotro' => '',
        	'nombreasentamiento' => 'Candelaria',
        	'numerointerior' => '232',
        	'numeroexterior' => '3434',
        	'localidad' => 'cardenas',
        	'municipio' => 'cintalapa',
        	'estado' => 'chiapas',
        	'codigopostal' => '304040',
        	'superficie' => '4343434',
        	'refencia' => 'cuadra y media una cantina',
        	'proyecto_id' => $proyectoId,
		]);
		
		Ideanegocio::create([ 
        	'definicion' => 'es un proyecto muy bueno',
        	'croquis' => 'pdf',
        	'tipodomicilio' => '2 norte',
        	'tipoasentamiento' => '5343',
        	'tipoasenotro' => '',
        	'nombreasentamiento' => 'Candelaria',
        	'numerointerior' => '232',
        	'numeroexterior' => '3434',
        	'localidad' => 'cardenas',
        	'municipio' => 'cintalapa',
        	'estado' => 'chiapas',
        	'codigopostal' => '304040',
        	'superficie' => '4343434',
        	'refencia' => 'cuadra y media una cantina',
        	'proyecto_id' => $proyectoId,
		]);
		
		Ideanegocio::create([ 
        	'definicion' => 'es un proyecto muy bueno',
        	'croquis' => 'pdf',
        	'tipodomicilio' => '2 norte',
        	'tipoasentamiento' => '5343',
        	'tipoasenotro' => '',
        	'nombreasentamiento' => 'Candelaria',
        	'numerointerior' => '232',
        	'numeroexterior' => '3434',
        	'localidad' => 'cardenas',
        	'municipio' => 'cintalapa',
        	'estado' => 'chiapas',
        	'codigopostal' => '304040',
        	'superficie' => '4343434',
        	'refencia' => 'cuadra y media una cantina',
        	'proyecto_id' => $proyectoId,
        ]);
    }
}
