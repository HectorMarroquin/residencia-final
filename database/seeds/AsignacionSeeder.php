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
        /*
        $asesor1 = Asesor::where('Nombre','Esdras De Jesus')->value('id');
        $proyecto1 = Proyecto::where('RazonSocial','Food Movile')->value('id');
        $proyecto2 = Proyecto::where('RazonSocial','Hexagon')->value('id');

        Asignacion::create([
            
            'asesor_id' => $asesor1,
            'proyecto_id' => $proyecto1,


        ]);
        Asignacion::create([
            
            'asesor_id' => $asesor1,
            'proyecto_id' => $proyecto2,


        ]); */
   
    }
}
