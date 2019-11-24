<?php

use Illuminate\Database\Seeder;

class MusculaturaSeeder extends Seeder
{
    public function run()
    {
        //1
        DB::table('musculatura')->insert(['nome' => 'Abdomen']);
        //2
        DB::table('musculatura')->insert(['nome' => 'Tríceps']);
        //3
        DB::table('musculatura')->insert(['nome' => 'Glúteo']);
        //4
        DB::table('musculatura')->insert(['nome' => 'Coxa']);
        //5
        DB::table('musculatura')->insert(['nome' => 'Peitoral']);
        //6
        DB::table('musculatura')->insert(['nome' => 'Quadríceps']);
        //7
        DB::table('musculatura')->insert(['nome' => 'Braços']);
    }
}
