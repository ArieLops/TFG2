<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoMusculatura extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  => 'required|max:100|unique:musculatura,nome,'. $this->route('id'),
        ];
    }
}
