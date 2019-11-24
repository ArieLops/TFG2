<?php

use Illuminate\Database\Seeder;

class ExercicioSeeder extends Seeder
{
    public function run()
    {   
        //1
        DB::table('exercicio')->insert(['nome' => 'Supino']);
        //2
        DB::table('exercicio')->insert(['nome' => 'Agachamento']);
        //3
        DB::table('exercicio')->insert(['nome' => 'Leg Press']);
    }
}
