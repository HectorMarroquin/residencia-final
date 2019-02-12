<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Asesor;
use App\User;
class AsesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        
            $users1 = User::where('name','Aida Guillermina')->value('id');
            $user2 = User::where('name','Esdras De Jesus')->value('id');

            Asesor::create([
        	'Nombre' => 'Aida Guillermina',
        	'ApellidoP' => 'Cossio',
        	'ApellidoM' => 'Martinez',
        	'Direccion' => 'Carretera Panamericana Kilometro 1080',
        	'Ciudad' => 'Tuxtla Gutierrez',
        	'Estado' => 'Chiapas',
        	'Colonia' => 'Herradura',
        	'CP' => '29050',
        	'RFC' => 'COMA700723',
        	'Escolaridad' => 'Licenciatura',
        	'CURP' => 'COMA700723CSSRD014',
        	'Telefono' => '9616150380',
        	'FechaNacimiento' => '1970-07-23',
        	'EstadoCivil' => 'Soltero(a)',
        	'Sexo' => 'Femenino',
        	'Correo' => 'acossio_m@yahoo.com.mx',   	
        	'Contraseña' => bcrypt('123456'),
            'user_id' => $users1,

        ]);

            Asesor::create([
            'Nombre' => 'Esdras De Jesus',
            'ApellidoP' => 'Lopez ',
            'ApellidoM' => 'Palacios',
            'Direccion' => 'Calzada Conasupo, Callejon Almolillo',
            'Ciudad' => 'Tuxtla Gutierrez',
            'Estado' => 'Chiapas',
            'Colonia' => 'San Jose',
            'CP' => '29050',
            'RFC' => 'LOPE960615QR5',
            'Escolaridad' => 'Licenciatura',
            'CURP' => 'LOPE960615QR5HC12G',
            'Telefono' => '9612290839',
            'FechaNacimiento' => '1996-06-15',
            'EstadoCivil' => 'Soltero',
            'Sexo' => 'Masculino',
            'Correo' => 'Exdraz_Lpz@outlook.com',    
            'Contraseña' => bcrypt('123456'),
            'user_id' => $user2,

        ]);

        // factory(Asesor::class, 25)->create();
*/


    }
}
