<?php

use Illuminate\Database\Seeder;

class AvaliacaoSeeder extends Seeder
{
    public function run()
    {
        DB::table('avaliacao_fisica')->insert([
            'users_id' => '2', 
            'dataInicial' => '2019-11-07',
            'dataFinal' => '2019-11-27', 
            'massa' => '55', 
            'estatura' => '1.70',
            'peitoral' => '2',
            'axMedio' => '2',
            'subEscapular' => '2',
            'tricipital' => '2',
            'bicipital' => '2',
            'suprailiaca' => '2',
            'abdominal' => '2',
            'panturrilha' => '2',
            'torax' => '2',
            'bracoDireito' => '2',
            'bracoEsquerdo' => '2',
            'antebracoDireito' => '2',
            'antebracoEsquerdo' => '2',
            'cintura' => '2',
            'quadril' => '2',
            'coxaDireita' => '2',
            'coxaEsquerda' => '2',
            'pernaDireita' => '2',
            'pernaEsquerda' => '2'
        ]);
    }
}
