<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProjetoFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'img_principal' => 'file|required',
            'img_secundaria' => 'file|nullable',
            'img_terciaria' => 'file|nullable',
            'img_quaternario' => 'file|nullable',
            'data_inicio' => 'date|nullable',
            'data_final' => 'date|nullable'
        ];

        return $rules;
    }
}
