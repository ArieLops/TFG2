<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoExercicio extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  => 'required|max:100|unique:exercicio,nome,'. $this->route('id'),
        ];
    }
}
