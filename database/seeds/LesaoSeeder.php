<?php

use Illuminate\Database\Seeder;

class LesaoSeeder extends Seeder
{
    public function run()
    {
        DB::table('lesao')->insert(['nome' => 'Abrasão']);
        DB::table('lesao')->insert(['nome' => 'Bolha']);
        DB::table('lesao')->insert(['nome' => 'Calo']);
        DB::table('lesao')->insert(['nome' => 'Contusão']);
        DB::table('lesao')->insert(['nome' => 'Distensão']);
        DB::table('lesao')->insert(['nome' => 'Entorse']);
        DB::table('lesao')->insert(['nome' => 'Epicondilite']);
        DB::table('lesao')->insert(['nome' => 'Fratura']);
        DB::table('lesao')->insert(['nome' => 'Luxação']);
        DB::table('lesao')->insert(['nome' => 'Subluxações']);
        DB::table('lesao')->insert(['nome' => 'Tendinite']);   
    }
}
