<?php

use Illuminate\Database\Seeder;
use App\Models\Fase;
use App\Models\Actividad;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Resumenid = Fase::where('NombreFase','Resumen Ejecutivo')->value('id');
        $Faseid = Fase::where('NombreFase','Mercado')->value('id');
        Actividad::create([

            'Nombre' => 'Nombre del proyecto',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);

        Actividad::create([

            'Nombre' => 'Logotipo y Slogan',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);
        Actividad::create([

            'Nombre' => 'Razon social y Giro',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);
        Actividad::create([

            'Nombre' => 'Descripción de la Empresa',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);
        Actividad::create([

            'Nombre' => 'Objetivo General',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);
        Actividad::create([

            'Nombre' => 'Objetivos Especificos sobre el producto',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);
        Actividad::create([

            'Nombre' => 'Mision',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);
        Actividad::create([

            'Nombre' => 'Vision',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);
        Actividad::create([

            'Nombre' => 'Valores',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);
        Actividad::create([

            'Nombre' => 'Estructura',
            'Descripcion' => '',
            'fase_id' => $Resumenid,
        ]);

        Actividad::create([

            'Nombre' => 'Caracteristicas del producto y mercado',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
        
        Actividad::create([

            'Nombre' => 'Caracteristicas del mercado',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
        
        Actividad::create([

            'Nombre' => 'Segmento de mercado',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
        
        Actividad::create([

            'Nombre' => 'Analisis de la demanda',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
        
        Actividad::create([

            'Nombre' => 'Analisis de la oferta',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
        
        Actividad::create([

            'Nombre' => 'Identificacion de la competencia',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
        
        Actividad::create([

            'Nombre' => 'Analisis Foda',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
        
        Actividad::create([

            'Nombre' => 'Analisis de la comercializacion',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
        
        Actividad::create([

            'Nombre' => 'Promocion del producto o servicio',
            'Descripcion' => '',
            'fase_id' => $Faseid,
        ]);
    }
}
