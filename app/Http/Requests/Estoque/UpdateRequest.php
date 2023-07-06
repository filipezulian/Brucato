<?php

namespace App\Http\Requests\Estoque;

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
      
        'quantidade' => 'required|integer', 
    
        ];
    }

    public function mensagens(){
        [
            
            'quantidade.required' => 'Campo obrigatório',
            'quantidade.integer' => 'Somente numeros inteiros',

        ];
    }
}
