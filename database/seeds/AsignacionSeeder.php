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
        $asesorId = Asesor::where('Nombre','Aldo Fabian')->value('id');
        $proyectoId = Proyecto::where('Actividad','Sector Extractivo')->value('id');
        $proyectoId1 = Proyecto::where('Actividad','Sector Agronomico')->value('id');

        Asignacion::create([
            
            'asesor_id' => $asesorId,
            'proyecto_id' => $proyectoId,


        ]);
        Asignacion::create([
            
            'asesor_id' => $asesorId,
            'proyecto_id' => $proyectoId1,


        ]);
   
    }
}
