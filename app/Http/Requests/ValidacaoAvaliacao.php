<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoAvaliacao extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'users_id'  => 'required',
            'vigenciaAvaliacao'  => 'required',
            'massa' => 'required|numeric',
            'estatura' => 'required|numeric',
            'peitoral' => 'required|numeric',
            'axMedio' => 'required|numeric',
            'subEscapular' => 'required|numeric',
            'tricipital' => 'required|numeric',
            'bicipital' => 'required|numeric',
            'supraIliaca' => 'required|numeric',
            'abdominal' => 'required|numeric',
            'panturrilha' => 'required|numeric',
            'torax' => 'required|numeric',
            'bracoDireito' => 'required|numeric',
            'bracoEsquerdo' => 'required|numeric',
            'antebracoDireito' => 'required|numeric',
            'antebracoEsquerdo' => 'required|numeric',
            'cintura' => 'required|numeric',
            'quadril' => 'required|numeric',
            'coxaDireita' => 'required|numeric',
            'coxaEsquerda' => 'required|numeric',
            'pernaDireita' => 'required|numeric',
            'pernaEsquerda' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'users_id.required'         => "O campo NOME escolhido",
            'vigenciaAvaliacao.required' => "O campo VIGÊNCIA deve ser preenchido",
            'massa.required'             => 'O campo MASSA deve ser preenchido',
            'estatura.required'          => 'O campo ESTATURA deve ser preenchido',
            'peitoral.required'          => 'O campo PEITORAL deve ser preenchido',
            'axMedio.required'           => 'O campo AXILAR MÉDICO deve ser preenchido',
            'subEscapular.required'      => 'O campo SUB ESCAPULAR deve ser preenchido',
            'tricipital.required'        => 'O campo TRICIPITAL deve ser preenchido',
            'bicipital.required'         => 'O campo BICIPITAL deve ser preenchido',
            'supraIliaca.required'       => 'O campo SUPRAILÍACA deve ser preenchido',
            'abdominal.required'         => 'O campo ABDOMINAL deve ser preenchido',
            'panturrilha.required'       => 'O campo PANTURRILHA deve ser preenchido',
            'torax.required'             => 'O campo TORAX deve ser preenchido',
            'bracoDireito.required'      => 'O campo BRAÇO DIREITO deve ser preenchido',
            'bracoEsquerdo.required'     => 'O campo BRAÇO ESQUERDO deve ser preenchido',
            'cintura.required'           => 'O campo CINTURA deve ser preenchido',
            'antebracoEsquerdo.required' => 'O campo ANTEBRAÇO ESQUERDO deve ser preenchido',
            'antebracoDireito.required'  => 'O campo ANTEBRAÇO DIREITO deve ser preenchido',
            'quadril.required'           => 'O campo QUADRIL deve ser preenchido',
            'coxaDireita.required'       => 'O campo COXA DIREITA deve ser preenchido',
            'coxaEsquerda.required'      => 'O campo COXA ESQUERDA deve ser preenchido',
            'pernaDireita.required'      => 'O campo PERNA DIREITA deve ser preenchido',
            'pernaEsquerda.required'     => 'O campo PERNA ESQUERDA deve ser preenchido',
        ];
    }
}
