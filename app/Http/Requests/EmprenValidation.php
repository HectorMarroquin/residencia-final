<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmprenValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        
            'ApellidoP' => 'required',
            'ApellidoM' => 'required',
            'FechaNaci' => 'required',
            'Edad' => 'required',
            'Sexo' => 'required',
            'EstadoCivil' => 'required',
            'Direccion' => 'required',
            'NumeroExterior' => 'required',
            'NumeroInterior' => 'required',
            'Colonia' => 'required',
            'Ciudad' => 'required',
            'Municipio' => 'required',
            'CodigoPostal' => 'required',
            'TelefonoCel' => 'required',
            'TelefonoCasa' => 'required',
            'TelefonoOfi' => 'required',
            
            'Escolaridad' => 'required',
            'CURP' => 'required',
            'INE' => 'required',
            'TipoEmpresa' => 'required',
            'TipoPersona' => 'required',

        ];
    }
    public function attributes()
    {
        return [
            'Nombre' => 'nombre',
            'ApellidoP' => 'apellido paterno',
            'ApellidoM' => 'apellido materno',
            'FechaNaci' => 'fecha de nacimiento',
            'Edad' => 'edad',
            'Sexo' => 'sexo',
            'EstadoCivil' => 'estado civil',
            'Direccion' => 'direccion',
            'NumeroExterior' => 'numero exterior',
            'NumeroInterior' => 'numero interior',
            'Colonia' => 'colonia',
            'Ciudad' => 'ciudad',
            'Municipio' => 'municipio',
            'CodigoPostal' => 'codigo postal',
            'TelefonoCel' => 'telefono celular',
            'TelefonoCasa' => 'telefono de casa',
            'TelefonoOfi' => 'telefono de oficina',
            'Correo' => 'correo eletronico',
            'Escolaridad' => 'escolaridad',
            'CURP' => 'CURP',
            'INE' => 'INE',
            'TipoEmpresa' => 'tipo de empresa',
            'TipoPersona' => 'tipo de persona',
    ];
}
}
