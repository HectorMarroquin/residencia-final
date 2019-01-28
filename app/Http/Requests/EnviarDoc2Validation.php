<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnviarDoc2Validation extends FormRequest
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
             'documento2'=> 'required|mimes:docx,doc',
        ];
    }

     public function attributes()
    {
        return [

            'documento2' => 'El documento',
        ];
    }
}