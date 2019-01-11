<?php
use App\Models\Competencia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ideanegocio_Id = DB::table('ideanegocios')->value('id');  
        Competencia::create([
            'Nombre' => 'Bodega',
            'Giro' => 'es una tienda muy situada',
            'Descripcion' => 'empresa muy grande',
            'ideanegocio_id' => $ideanegocio_Id,
        ]);
    }
}
