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
         $ideanegocio_Id = DB::table('ideanegocios')->value('id');  
        Cpotencial::create([ 
            'Nombre' => 'los policias',
            'Giro' => 'es muy necasario lo que realizamos para su seguridad',
            'Descripcion' => 'empresa muy buena',
            'ideanegocio_id' => $ideanegocio_Id,
        ]);
    }
}
