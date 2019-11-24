<?php

use Illuminate\Database\Seeder;

class Exercicio_AparelhoSeeder extends Seeder
{
    
    public function run()
    {
        //Supino e Barra
        DB::table('exercicio_aparelho')->insert(['exercicio_id' => '1', 'aparelho_id' => '5']);
        //Agachamento e Barra
        DB::table('exercicio_aparelho')->insert(['exercicio_id' => '2', 'aparelho_id' => '5']);
        //Leg Press e Leg Press
        DB::table('exercicio_aparelho')->insert(['exercicio_id' => '3', 'aparelho_id' => '7']);
    }
}
