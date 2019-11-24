<?php

use Illuminate\Database\Seeder;

class Exercicio_MusculaturaSeeder extends Seeder
{
    public function run()
    {   
        //Supino e Abdomen
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '1', 'musculatura_id' => '1']);
        //Supino e Tríceps
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '1', 'musculatura_id' => '2']);
        //Supino e Peitoral
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '1', 'musculatura_id' => '5']);
        //Agachamento e Glúteo
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '2', 'musculatura_id' => '3']);
        //Agachamento e Coxa
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '2', 'musculatura_id' => '4']);
        //Leg Press e Coxa
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '3', 'musculatura_id' => '4']);
        //Leg Press e Quadríceps
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '3', 'musculatura_id' => '6']);        
        //Leg Press e Abdômen
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '3', 'musculatura_id' => '1']);
        //Leg Press e Glúteo
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '3', 'musculatura_id' => '3']);
    }
}
