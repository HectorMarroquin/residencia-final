<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsesorValidacion extends FormRequest
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
            'Nombre' => 'required',
            'ApellidoP' => 'required',
            'ApellidoM' => 'required',
            'Direccion' => 'required',
            'Ciudad' => 'required',
            'Estado' => 'required',
            'Colonia' => 'required',
            'CP' => 'required',
            'RFC' => 'required',
            'Escolaridad' => 'required',
            'CURP' => 'required',
            'Telefono' => 'required',
            'FechaNacimiento' => 'required|Date',
            'EstadoCivil' => 'required',
            'Sexo' => 'required',
            'Correo' => 'required|email',
            'Contraseña' => 'required'
        ];
    }
}
