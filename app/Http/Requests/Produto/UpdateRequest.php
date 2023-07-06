<?php

namespace App\Http\Requests\Produto;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nome' => 'required|max:50',
            'descricao' => 'max:250',
            'peso' => 'numeric|required',
            'altura' => 'numeric|required',
            'largura' => 'numeric|required',
            'comprimento' => 'numeric|required',
            'preco' => 'numeric|required',
            'imagem' => 'dimensions:min_width=100,min_height=200',
        ];
   }

    public function mensagens()
    {
        return [
            'nome.required'=>'Campo obrigatório',
            'nome.max'=> 'Permitido somente 50 caracteres',

            'descricao.max'=> 'Permitido somente 250 caracteres',

            'peso.numeric'=> 'Somente números',
            'peso.required'=> 'Campo obrigatório',


            'altura.numeric'=> 'Somente números',
            'altura.required'=> 'Campo obrigatório',

            'larura.numeric'=> 'Somente números',
            'larura.required'=> 'Campo obrigatório',

            'comprimento.numeric'=> 'Somente números',
            'comprimento.required'=> 'Campo obrigatório',
            
            'preco.numeric'=> 'Somente números',
            'preco.required'=> 'Campo obrigatório',

            'imagem.dimensions'=> 'Permitido somente imagens de 100x200px',
        ];
     }
}
