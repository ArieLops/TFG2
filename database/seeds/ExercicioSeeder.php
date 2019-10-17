<?php

use Illuminate\Database\Seeder;

class ExercicioSeeder extends Seeder
{
    public function run()
    {
        DB::table('exercicio')->insert(['nome' => 'Supino']);
        DB::table('exercicio')->insert(['nome' => 'Corrida']);
        DB::table('exercicio')->insert(['nome' => 'Agachamento']);
        DB::table('exercicio')->insert(['nome' => 'Abdominal']);
        DB::table('exercicio')->insert(['nome' => 'Levantamento Terra']);
    }
}
