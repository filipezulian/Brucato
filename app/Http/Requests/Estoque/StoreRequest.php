<?php

namespace App\Http\Requests\Estoque;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
       'CEP' => 'integer|required|max:8', 
       'quantidade' => 'required|integer', 
       'nome_local'=> 'required|max:100', 
       'id_produto' => 'required',
        ];
    }

   public function mensagens(){
        [
            'CEP.integer' => 'Somente números',
            'CEP.required' => 'Campo obrigatório',
            'CEP.max' => 'Máximo de 8 números',

            'quantidade.required' => 'Campo obrigatório',
            'quantidade.integer' => 'Somente numeros inteiros',

            'nome_local.required' => 'Campo obrigatório',
            'nome_local.max' => 'Máximo de 100 caracteres',

            'id_produto.required' => 'Campo obrigatório',
            
        ];
    }
}
