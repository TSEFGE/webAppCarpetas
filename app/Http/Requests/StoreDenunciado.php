<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDenunciado extends FormRequest
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
            'nombresQ' => 'string',

            'nombresC' => 'string|min:4|max:50',
            'primerApC' => 'alpha|min:4|max:50',
            'aliasC' => 'string|min:2|max:50',
            'calleC' => 'string|min:4|max:50',
            'numExternoC' => 'alpha_num|min:1|max:10',
            'numInternoC' => 'alpha_num|min:1|max:10',
            'narracionC' => 'string|min:5|max:2000',
            
            'nombres2' => 'string|min:4|max:50',
            'rfc2' => 'alpha_num|min:10|max:20',
            'representanteLegal' => 'string|min:4|max:100',
            'calle' => 'string|min:4|max:50',
            'numExterno' => 'alpha_num|min:1|max:10',
            'numInterno' => 'alpha_num|min:1|max:10',
            'calle3' => 'string|min:4|max:50',
            'numExterno3' => 'alpha_num|min:1|max:10',
            'numInterno3' => 'alpha_num|min:1|max:10',
            'correo' => 'email',
            'telefonoN' => 'numeric',
            'fax' => 'numeric',
            'senas partic' => 'string|min:1|max:150',
            'narracion' => 'string|min:5|max:2000',

            'nombres' => 'string|min:4|max:50',
            'primerAp' => 'alpha|min:4|max:50',
            'primerAp' => 'alpha|min:4|max:50',
            'rfc' => 'alpha_num|min:10|max:20',
            'curp' => 'alpha_num|min:15|max:20',
            'telefono' => 'numeric',
            'motivoEstancia' => 'string|min:4|max:200',
            'telefonoTrabajo' => 'numeric',
            'docIdentificacion' => 'string|min:2|max:50',
            'numDocIdentificacion' => 'string|min:2|max:50',
            'lugarTrabajo' => 'string',
            'calle2' => 'string|min:4|max:50',
            'numExterno2' => 'alpha_num|min:1|max:10',
            'numInterno2' => 'alpha_num|min:1|max:10',
            'alias' => 'string|min:2|max:50',
            'ingreso' => 'numeric',
            'residenciaAnterior' => 'string|min:4|max:100',
            'vestimenta' => 'string|min:4|max:150',
        ];
    }

    public function messages()
    {
        return [
            'nombresQ.string' => 'El nombre Q.R.R. debe ser alfabético',
        ];
    }
}
