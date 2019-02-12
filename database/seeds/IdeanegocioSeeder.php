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
    { /*
		 $proyectoId1 = DB::table('proyectos')->where('RazonSocial','Food Movile')->value('id'); 
		 $proyectoId2 = DB::table('proyectos')->where('RazonSocial','Hexagon')->value('id'); 
		 
        Ideanegocio::create([ 
        	'definicion' => 'La empresa se encuentra inspirada en las terminales de transporte que se encuentran en la avenida central por lo cual se decidio adoptar, la idea de un transporte de comida, que se encarga de llevar preparado, diferentes tipos de guisos, como lo son al pastor, res y cochito.',
        	'croquis' => 'pdf',
        	'tipodomicilio' => 'Urbano',
        	'tipoasentamiento' => 'Fraccionamiento',
        	'tipoasenotro' => '',
        	'nombreasentamiento' => 'Albino Corzo',
        	'numerointerior' => '',
        	'numeroexterior' => '1764',
        	'localidad' => 'Tuxtla Gutierrez',
        	'municipio' => 'Tuxtla Gutierrez',
        	'estado' => 'Chiapas',
        	'codigopostal' => '28904',
        	'superficie' => '700 metros cuadrados',
        	'refencia' => 'Al lado de la universidad de ciencias y artes de Chiapas',
        	'proyecto_id' => $proyectoId1,
		]);
		
		Ideanegocio::create([ 
        	'definicion' => 'El servicio al cliente sera en mostrador donde solicitara productos de papeleria y utiles escolares, el empleado buscara la mercancia o producto solicitado, verificara existencia en anaqueles y se procedera a enseñar presentaciones y marcas para que el cliente elija. Una vez elejido se traera el producto y se realizara una emision de nota para el pago del producto',
        	'croquis' => 'pdf',
        	'tipodomicilio' => 'Urbano',
        	'tipoasentamiento' => 'Colonia',
        	'tipoasenotro' => '',
        	'nombreasentamiento' => 'San Francisco',
        	'numerointerior' => '',
        	'numeroexterior' => '2250',
        	'localidad' => 'Tuxtla Gutierrez',
        	'municipio' => 'Tuxtla Gutierrez',
        	'estado' => 'Chiapas',
        	'codigopostal' => '29000',
        	'superficie' => '7 x 10 metros cuadrados',
        	'refencia' => 'En frente de la primaria Escuela Pascacio Gamboa, Barrio San Francisco',
        	'proyecto_id' => $proyectoId2,
		]);
		
	*/
    }
}
