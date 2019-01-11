<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoValidacion extends FormRequest
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
            'Actividad' => 'required',
            'Razonsocial' => 'required',
            'RFC' => 'required',
            'NombreDirector'=> 'required',
            'Telefonoemp'=> 'required',
            'CorreoEmp'=> 'required',
            'NombreProd'=> 'required',
            'Descripcion'=> 'required',
            'Organizacion'=> 'required',
            'Fortaleza'=> 'required',
            'Oportunidades'=> 'required',
            'Debilidades'=> 'required',
            'Amenazas'=> 'required',
            'definicion'=> 'required',
            'tipodomicilio'=> 'required',
            'nombreasentamiento'=> 'required',
            'numeroexterior'=> 'required',
            'numerointerior'=> 'required',
            'localidad'=> 'required',
            'municipio'=> 'required',
            'estado'=> 'required',
            'codigopostal'=> 'required',
            'superficie'=> 'required',
            'refencia'=> 'required',
            'croquis'=> 'required',
        ];
    }

    public function attributes()
    {
        return [

            'Actividad' => 'Sector de actividad en la que se desarrolla',
            'Razonsocial' => 'apellido Razon Social',
            'RFC' => 'RFC',
            'NombreDirector' => 'Nombre del Director',
            'Telefonoemp' => 'Telefono de la Empresa',
            'CorreoEmp' => 'Correo Eletronico de la Empresa',
            'NombreProd' => 'Nombre del Producto ó Servicio',
            'Descripcion' => 'Describe en que consiste su propuesta',
            'Organizacion' => 'Pertenece alguna organizacion',
            'Fortaleza' => 'municipio',
            'Oportunidades' => 'codigo postal',
            'Debilidades' => 'telefono celular',
            'Amenazas' => 'telefono de casa',
            'definicion' => 'telefono de oficina',
            'tipodomicilio' => 'correo eletronico',
            'nombreasentamiento' => 'INE',
            'numeroexterior' => 'tipo de empresa',
            'numerointerior' => 'tipo de persona',
            'localidad' => 'tipo de empresa',
            'municipio' => 'tipo de empresa',
            'estado' => 'tipo de empresa',
            'codigopostal' => 'tipo de empresa',
            'superficie' => 'tipo de empresa',
            'refencia' => 'tipo de empresa',
            'croquis' => 'tipo de empresa',
    ];
}
}
