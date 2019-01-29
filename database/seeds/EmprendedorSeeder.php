<?php
use App\Models\Emprendedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class EmprendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = User::where('name','Hector De Jesus')->value('id');
        $user2 = User::where('name','Alberth Eduardo')->value('id');

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
            'CURP' => 'MOPE234576HGTYJG07',
            'INE' => 'DJKSDJFKJDIJ',
            'RFC' => 'MOPE234576HGT',
            'RFCM' => '',
            'RazonSocial' => 'fkskdfksdfsdfkjsd',
            'ObjetivoSocial' => 'dfkjskfjksdjifjsdkfjsd',
            'TipoEmpresa' => 'sifjkjkjsadfjds',
            'TipoOtra' => '',
            'user_id' => $user2,
        ]);

        Emprendedor::create([
            'Nombre' => 'Hector',
            'ApellidoP' => 'Marroquin',
            'ApellidoM' => 'Gomez',
            'FechaNaci' => '23/12/1995',
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
            'correo' => 'usiel@gmail.com',
            'Escolaridad' => 'Universidad',
            'Tipopersona' => 'Persona Moral',
            'CURP' => 'MAGH951223HCSRMC03',
            'INE' => 'DJKSDJFKJDIJ',
            'RFC' => 'MAGH951223QR5',
            'RFCM' => '',
            'RazonSocial' => 'fkskdfksdfsdfkjsd',
            'ObjetivoSocial' => 'dfkjskfjksdjifjsdkfjsd',
            'TipoEmpresa' => 'sifjkjkjsadfjds',
            'TipoOtra' => '',
            'user_id' => $user1,
        ]);

        // factory(Emprendedor::class, 20)->create();
  
    }
}
