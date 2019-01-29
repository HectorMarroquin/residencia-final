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
        
            $users1 = User::where('name','Aldo Fabian')->value('id');
            $user2 = User::where('name','Wilder Adan')->value('id');
            $user3 = User::where('name','Alan Josue')->value('id');

            Asesor::create([
        	'Nombre' => 'Aldo Fabian',
        	'ApellidoP' => 'Perez',
        	'ApellidoM' => 'Albores',
        	'Direccion' => 'Colonia San Jose Teran',
        	'Ciudad' => 'Tuxtla Gutierrez',
        	'Estado' => 'Chiapas',
        	'Colonia' => 'San Jose',
        	'CP' => '29050',
        	'RFC' => 'MAGH951223QR5',
        	'Escolaridad' => 'Licenciatura',
        	'CURP' => 'MAGH951223HCSRMC03',
        	'Telefono' => '9612290839',
        	'FechaNacimiento' => '1995-12-23',
        	'EstadoCivil' => 'Soltero',
        	'Sexo' => 'Masculino',
        	'Correo' => 'aldo@gmail.com',   	
        	'Contraseña' => bcrypt('123456'),
            'user_id' => $users1,

        ]);

            Asesor::create([
            'Nombre' => 'Wilder Adan',
            'ApellidoP' => 'Colmenares ',
            'ApellidoM' => 'Cruz',
            'Direccion' => 'Colonia los manguitos',
            'Ciudad' => 'Tuxtla Gutierrez',
            'Estado' => 'Chiapas',
            'Colonia' => 'San Jose',
            'CP' => '29050',
            'RFC' => 'MAGH951223QR5',
            'Escolaridad' => 'Licenciatura',
            'CURP' => 'MAGH951223HCSRMC03',
            'Telefono' => '9612290839',
            'FechaNacimiento' => '1995-12-23',
            'EstadoCivil' => 'Soltero',
            'Sexo' => 'Masculino',
            'Correo' => 'wil@gmail.com',    
            'Contraseña' => bcrypt('123456'),
            'user_id' => $user2,

        ]);

            Asesor::create([
            'Nombre' => 'Alan Josue',
            'ApellidoP' => 'Lopez',
            'ApellidoM' => 'Hernandez',
            'Direccion' => 'Colonia Real del Bosque',
            'Ciudad' => 'Tuxtla Gutierrez',
            'Estado' => 'Chiapas',
            'Colonia' => 'San Jose',
            'CP' => '29050',
            'RFC' => 'MAGH951223QR5',
            'Escolaridad' => 'Licenciatura',
            'CURP' => 'MAGH951223HCSRMC03',
            'Telefono' => '9612290839',
            'FechaNacimiento' => '1995-12-23',
            'EstadoCivil' => 'Soltero',
            'Sexo' => 'Masculino',
            'Correo' => 'alan@gmail.com',    
            'Contraseña' => bcrypt('123456'),
            'user_id' => $user3,

        ]);

        // factory(Asesor::class, 25)->create();



    }
}
