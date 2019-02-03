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
        $ideanegocio_Id = DB::table('ideanegocios')->where('codigopostal','28904')->value('id');  
        $ideanegocio_Id1 = DB::table('ideanegocios')->where('codigopostal','29000')->value('id'); 

        Competencia::create([
            'Nombre' => 'Caldo de gallina los pollitos',
            'Giro' => 'Restaurante con servicio de preparacion de antojitos',
            'Descripcion' => 'Barrio, tzocotumbak C.P 29000, Tuxtla Gutierrez, Chiapas',
            'ideanegocio_id' => $ideanegocio_Id,
        ]);
        Competencia::create([
            'Nombre' => 'Parrilla Norteña',
            'Giro' => 'Restaurante con servicio de preparacion de antojitos',
            'Descripcion' => 'Barrio, tzocotumbak C.P 29000, Tuxtla Gutierrez, Chiapas',
            'ideanegocio_id' => $ideanegocio_Id,
        ]);
        Competencia::create([
            'Nombre' => 'El Fogon Suizo',
            'Giro' => 'Restaurante con servicio de preparacion de tortas y tacos',
            'Descripcion' => 'Av. central oriente colonia san roque C.P. 29040, Tuxtla Gutierrez',
            'ideanegocio_id' => $ideanegocio_Id,
        ]);


        Competencia::create([
            'Nombre' => 'Abarrotes y papeleria sabolines',
            'Giro' => 'Comercio al por menor en abarrotes y miselaneas',
            'Descripcion' => 'Calle 2 oriente sur, 2235 barrio san francisco C.P 29000 Tuxtla Gutierrez',
            'ideanegocio_id' => $ideanegocio_Id1,
        ]);
        Competencia::create([
            'Nombre' => 'Ciber y papeleria meni',
            'Giro' => 'Comercio al por menor de papeleria',
            'Descripcion' => 'Calle central sur, numero 2105 Barrio San Francisco',
            'ideanegocio_id' => $ideanegocio_Id1,
        ]);
        Competencia::create([
            'Nombre' => 'Papeleria Cruz',
            'Giro' => 'Comercio al por menor de articulos de papeleria',
            'Descripcion' => 'Calle quinta poniente sur, numero 1531 Barrio San Francisco, C.P 29000 Tuxtla Gutierrez',
            'ideanegocio_id' => $ideanegocio_Id1,
        ]);
        Competencia::create([
            'Nombre' => 'Papeleria Snopy',
            'Giro' => 'Comercio al por menor de articulos de papeleria',
            'Descripcion' => 'Calle primera oriente sur, S/N, Bario san francisco C.P 29000 Tuxtla Gutierrez',
            'ideanegocio_id' => $ideanegocio_Id1,
        ]);
          Competencia::create([
            'Nombre' => 'Escritorio Moderno',
            'Giro' => 'Comercio al por menor y mayor de articulos de papeleria y libreria escolar',
            'Descripcion' => 'Av. 3 sur oriente, 748, Asamblea de barrio san roque, C.P 29000 Tuxtla Gutierrez',
            'ideanegocio_id' => $ideanegocio_Id1,
        ]);
    }
}
