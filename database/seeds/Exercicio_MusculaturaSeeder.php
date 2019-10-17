<?php

use Illuminate\Database\Seeder;

class Exercicio_MusculaturaSeeder extends Seeder
{
    public function run()
    {
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '1', 'musculatura_id' => '3']);
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '2', 'musculatura_id' => '4']);
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '2', 'musculatura_id' => '5']);
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '3', 'musculatura_id' => '4']);
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '3', 'musculatura_id' => '5']);
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '4', 'musculatura_id' => '1']);
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '5', 'musculatura_id' => '2']);
        DB::table('exercicio_musculatura')->insert(['exercicio_id' => '5', 'musculatura_id' => '3']);
    }
}
