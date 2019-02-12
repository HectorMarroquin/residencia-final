<?php

use App\Models\Cpotencial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CpotencialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        /*
         $ideanegocio_Id = DB::table('ideanegocios')->where('codigopostal','28904')->value('id');  
         $ideanegocio_Id1 = DB::table('ideanegocios')->where('codigopostal','29000')->value('id');  

        Cpotencial::create([ 
            'Nombre' => 'Tacos el sabroso',
            'Giro' => 'Restaurante con servicio de preparacion de tacos',
            'Descripcion' => 'av. central #20, entre 1 poniente y 2 sur',
            'ideanegocio_id' => $ideanegocio_Id,
        ]);

        Cpotencial::create([ 
            'Nombre' => 'Escuela Pascacio Gamboa',
            'Giro' => 'Escuela primaria',
            'Descripcion' => 'Barrio San Francisco',
            'ideanegocio_id' => $ideanegocio_Id,
        ]);

        Cpotencial::create([ 
            'Nombre' => 'Escuela UNACH',
            'Giro' => 'Facultad de medicina',
            'Descripcion' => '3 poniente, entre 12 y 13 sur , Barrio San Francisco, Tuxtla Gutierrez',
            'ideanegocio_id' => $ideanegocio_Id,
        ]);

        Cpotencial::create([ 
            'Nombre' => 'Escuela UNACH esto es prueba',
            'Giro' => 'Facultad de medicina',
            'Descripcion' => '3 poniente, entre 12 y 13 sur , Barrio San Francisco, Tuxtla Gutierrez',
            'ideanegocio_id' => $ideanegocio_Id1,
        ]); */
    }
}
