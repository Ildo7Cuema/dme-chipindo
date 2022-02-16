<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeclaracaoServico_request extends FormRequest
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
            'emolumento'=>'bail|required',
            'efeito'=>'bail|required',
            'entidade'=>'bail|required',
        ];
    }


    public function messages()
    {
        return [
            'emolumento'=>'Preencha o campo do emolumento',
            'efeito'=>'Informe o efeito para essa declarção',
            'entidade'=>'Informe o efeito para essa declarção',
        ];
    }
}
