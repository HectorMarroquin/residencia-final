<?php

use Illuminate\Database\Seeder;
use App\Models\Proyecto;
use App\Models\Asesor;
use App\Models\Asignacion;
class AsignacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asesor1 = Asesor::where('Nombre','Aldo Fabian')->value('id');
        $asesor2 = Asesor::where('Nombre','Wilder Adan')->value('id');
        $proyecto1 = Proyecto::where('Actividad','Sector Extractivo')->value('id');
        $proyecto2 = Proyecto::where('Actividad','Sector Agronomico')->value('id');
        $proyecto3 = Proyecto::where('Actividad','Sector Industrial')->value('id');
        $proyecto4 = Proyecto::where('Actividad','Sector Agricola')->value('id');

        Asignacion::create([
            
            'asesor_id' => $asesor1,
            'proyecto_id' => $proyecto1,


        ]);
        Asignacion::create([
            
            'asesor_id' => $asesor1,
            'proyecto_id' => $proyecto2,


        ]);

        Asignacion::create([
            
            'asesor_id' => $asesor2,
            'proyecto_id' => $proyecto3,


        ]);
        Asignacion::create([
            
            'asesor_id' => $asesor2,
            'proyecto_id' => $proyecto4,


        ]);
   
    }
}
