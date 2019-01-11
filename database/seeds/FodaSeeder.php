<?php
use App\Models\Foda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FodaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$proyecto_Id = DB::table('proyectos')->value('id'); 
        Foda::create([ 
        	'Fortaleza' => 'es un proyecto muy biable, agrupado, muy buena onda',
        	'Oportunidades' => 'El negocio que se realiza, la ubicacion',
        	'Debilidades' => 'el dinero que se maneja',
        	'Amenazas' => 'la poblacion',
        	'proyecto_id' => $proyecto_Id,
        ]);
    }
}
