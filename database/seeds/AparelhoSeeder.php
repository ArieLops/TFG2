<?php

use Illuminate\Database\Seeder;

class AparelhoSeeder extends Seeder
{
    public function run()
    {
        DB::table('aparelho')->insert(['nome' => 'Trampolim Jump']);
        DB::table('aparelho')->insert(['nome' => 'Mini Bicicleta cicloergonômetro']);
        DB::table('aparelho')->insert(['nome' => 'Esteira Elétrica']);
        DB::table('aparelho')->insert(['nome' => 'Bicicleta Ergométrica']);
        DB::table('aparelho')->insert(['nome' => 'Barra']);
        DB::table('aparelho')->insert(['nome' => 'Cadeira Extensora']);
        DB::table('aparelho')->insert(['nome' => 'Leg Press']);
    }
}
