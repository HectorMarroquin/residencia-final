<?php
use App\Models\Emprendedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmprendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Emprendedor::create([
            'Nombre' => 'Albert Eduardo',
            'ApellidoP' => 'Morales',
            'ApellidoM' => 'Perez',
            'FechaNaci' => '16/11/1995',
            'Edad' => '23',
            'Sexo' => 'Masculino',
            'EstadoCivil' => 'Soltero',
            'Direccion' => '2 norte',
            'NumeroExterior' => '23',
            'NumeroInterior' => '12',
            'Colonia' => 'Candelaria',
            'Ciudad' => 'Chiapas',
            'Municipio' => 'Cintalapa',
            'codigopostal' => '30400',
            'TelefonoCel' => '9681293779',
            'TelefonoOfi' => '9681293779',
            'TelefonoCasa' => '9681293779',
            'correo' => 'alberth3216@gmail.com',
            'Escolaridad' => 'Universidad',
            'Tipopersona' => 'Persona Moral',
            'CURP' => 'SJDHKDFHASDFJH',
            'INE' => 'DJKSDJFKJDIJ',
            'RFC' => 'DFKSDKFJKDSKFJS',
            'RFCM' => '',
            'RazonSocial' => 'fkskdfksdfsdfkjsd',
            'ObjetivoSocial' => 'dfkjskfjksdjifjsdkfjsd',
            'TipoEmpresa' => 'sifjkjkjsadfjds',
            'TipoOtra' => '',
        ]);

        factory(Emprendedor::class, 20)->create();
  
    }
}
