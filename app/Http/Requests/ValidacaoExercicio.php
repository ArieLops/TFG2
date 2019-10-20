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
            'nome'  => 'required|unique:exercicio,nome,'. $this->route('id'),
            'tagsAparelho'    => 'required|exists:aparelho,id',
            'tagsMusculatura' => 'required|exists:musculatura,id',
        ];
    }

    public function messages(){
        return [
            'nome.required'            => "O campo NOME deve ser preenchido",
            'tagsMusculatura.required' => "O campo TAGS MUSCULATURA deve ser preenchido",
            'tagsAparelho.required'    => "O campo TAGS APARELHO deve ser preenchido",
        ];
    }
}
