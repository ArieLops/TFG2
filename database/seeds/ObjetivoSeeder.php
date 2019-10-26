<?php

use Illuminate\Database\Seeder;

class ObjetivoSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('objetivo')->insert(['nome' => 'Hipertrofia']);
        DB::table('objetivo')->insert(['nome' => 'Emagrecimento']);
        DB::table('objetivo')->insert(['nome' => 'Condicionamento Físico']);
    }
}
