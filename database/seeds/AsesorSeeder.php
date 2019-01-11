<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Asesor;

class AsesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

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
        	'Correo' => 'hector.coki@gmail.com',   	
        	'Contraseña' => bcrypt('123456'),


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
            'Correo' => 'eaz@gmail.com',    
            'Contraseña' => bcrypt('123456'),


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
            'Correo' => 'alberth@gmail.com',    
            'Contraseña' => bcrypt('123456'),


        ]);

        factory(Asesor::class, 25)->create();



    }
}
