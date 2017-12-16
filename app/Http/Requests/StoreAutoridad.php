<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutoridad extends FormRequest
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
                
            'nombres' => 'nombre|min:3|max:50',
            'primerAp' => 'nombre|min:3|max:50',
            'primerAp' => 'nombre|min:3|max:50',
            'rfc' => 'rfc|min:10|max:20',
            'curp' => 'curp|min:15|max:20',
            'telefono' => 'numeric',
            'motivoEstancia' => 'string|min:4|max:200',
            'docIdentificacion' => 'string|min:2|max:50',
            'numDocIdentificacion' => 'string|min:2|max:50',
            'calle' => 'string|min:4|max:100',
            'numExterno' => 'alpha_num|min:1|max:10',
            'numInterno' => 'alpha_num|min:1|max:10',
            'lugarTrabajo' => 'string',
            'telefonoTrabajo' => 'numeric',
            'calle2' => 'string|min:4|max:100',
            'numExterno2' => 'alpha_num|min:1|max:10',
            'numInterno2' => 'alpha_num|min:1|max:10',
            'horarioLaboral' => 'string',
            'narracion' => 'string|min:5|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}
