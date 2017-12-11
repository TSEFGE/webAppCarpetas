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
            'nombresQ' => 'alpha',
            'nombresC' => 'alpha',
            'primerApC' => 'alpha',
            'aliasC' => 'alpha_num',
            'calleC' => 'alpha_num',
            'numExternoC' => 'alpha_num',

        ];
    }

    public function messages()
    {
        return [
            'nombresQ.alpha' => 'El nombre debe ser alfabético',
        ];
    }
}
