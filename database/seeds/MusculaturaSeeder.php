<?php

use Illuminate\Database\Seeder;

class MusculaturaSeeder extends Seeder
{
    public function run()
    {
        DB::table('musculatura')->insert(['nome' => 'Abdomen']);
        DB::table('musculatura')->insert(['nome' => 'Bíceps']);
        DB::table('musculatura')->insert(['nome' => 'Tríceps']);
        DB::table('musculatura')->insert(['nome' => 'Glúteo']);
        DB::table('musculatura')->insert(['nome' => 'Coxa']);
        DB::table('musculatura')->insert(['nome' => 'Peitoral']);
        DB::table('musculatura')->insert(['nome' => 'Costas']);
        DB::table('musculatura')->insert(['nome' => 'Quadríceps']);
        DB::table('musculatura')->insert(['nome' => 'Braços']);
    }
}
