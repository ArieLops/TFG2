<?php

use Illuminate\Database\Seeder;

class SinalSeeder extends Seeder
{
    public function run()
    {
        DB::table('sinal')->insert(['nome' => 'Cefaléias frequentes']);
        DB::table('sinal')->insert(['nome' => 'Claudicação intermitente']);
        DB::table('sinal')->insert(['nome' => 'Crises de tontura']);
        DB::table('sinal')->insert(['nome' => 'Dispnéia paroxística noturna']);
        DB::table('sinal')->insert(['nome' => 'Dor, desconforto na mandíbula']);
        DB::table('sinal')->insert(['nome' => 'Dor, desconforto na mandíbula']);
        DB::table('sinal')->insert(['nome' => 'Dor, desconforto no pescoço']);
        DB::table('sinal')->insert(['nome' => 'Dor, desconforto no tórax']);
        DB::table('sinal')->insert(['nome' => 'Dor, desconforto nos braços']);
        DB::table('sinal')->insert(['nome' => 'Edema dos tornozelos']);
        DB::table('sinal')->insert(['nome' => 'Fadiga durante atividades habituais']);
        DB::table('sinal')->insert(['nome' => 'Falta de ar com esforço leve']);
        DB::table('sinal')->insert(['nome' => 'Falta de ar durante atividades habituais']);
        DB::table('sinal')->insert(['nome' => 'Falta de ar em repouso']);
        DB::table('sinal')->insert(['nome' => 'Lombalgias']);
        DB::table('sinal')->insert(['nome' => 'Ortopnéia']);
        DB::table('sinal')->insert(['nome' => 'Palpitações cardíacas']);
        DB::table('sinal')->insert(['nome' => 'Problemas ortopédicos']);
        DB::table('sinal')->insert(['nome' => 'Resfriados freqüentes']);
        DB::table('sinal')->insert(['nome' => 'Sopro cardíaco conhecido']);
        DB::table('sinal')->insert(['nome' => 'Taquicardia']);
        DB::table('sinal')->insert(['nome' => 'Tosse aos esforços']);
        DB::table('sinal')->insert(['nome' => 'Tosse com sangue']);
        DB::table('sinal')->insert(['nome' => 'Vertigem ou síncope']);
    }
}
