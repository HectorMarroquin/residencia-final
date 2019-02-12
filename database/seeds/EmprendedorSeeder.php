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
        /*
        $user1 = User::where('name','Vanessa Jennifer')->value('id');
  
        Emprendedor::create([
            'Nombre' => 'Vanessa Jennifer',
            'ApellidoP' => 'Aguilar',
            'ApellidoM' => 'Padilla',
            'FechaNaci' => '1995-02-12',
            'Edad' => '23',
            'Sexo' => 'Femenino',
            'EstadoCivil' => 'Soltero(a)',
            'Direccion' => '2 norte y 1 sur',
            'NumeroExterior' => '23',
            'NumeroInterior' => '12',
            'Colonia' => 'Plan de ayala',
            'Ciudad' => 'Chiapas',
            'Municipio' => 'Tuxtla Gutierrez',
            'codigopostal' => '30400',
            'TelefonoCel' => '9681293779',
            'TelefonoOfi' => '9681293779',
            'TelefonoCasa' => '9681293779',
            'correo' => 'vanessa@gmail.com',
            'Escolaridad' => 'Licenciatura',
            'Tipopersona' => 'Persona Moral',
            'CURP' => 'AGPV950212HCRRL06X',
            'INE' => 'DJKSDJFKJDIJ',
            'RFC' => '',
            'RFCM' => 'FOMO142130Z12',
            'RazonSocial' => 'Food Mobile',
            'ObjetivoSocial' => '',
            'TipoEmpresa' => 'Sociedad en responsabilidad limitada',
            'TipoOtra' => '',
            'user_id' => $user1,
        ]);

        // factory(Emprendedor::class, 20)->create();
  */
    }
}
