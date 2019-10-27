<?php

use Illuminate\Database\Seeder;

class AparelhoSeeder extends Seeder
{
    public function run()
    {
        DB::table('aparelho')->insert(['nome' => 'Trampolim Jump']);
        DB::table('aparelho')->insert(['nome' => 'Halter de Ferro - 1Kg']);
        DB::table('aparelho')->insert(['nome' => 'Halter de Ferro - 2Kg']);
        DB::table('aparelho')->insert(['nome' => 'Halter de Ferro - 5Kg']);
        DB::table('aparelho')->insert(['nome' => 'Halter de Ferro - 10Kg']);
        DB::table('aparelho')->insert(['nome' => 'Halter de Ferro - 20Kg']);
        DB::table('aparelho')->insert(['nome' => 'Halter de Ferro - 50Kg']);
        DB::table('aparelho')->insert(['nome' => 'Mini Bicicleta cicloergonômetro']);
        DB::table('aparelho')->insert(['nome' => 'Esteira Elétrica']);
        DB::table('aparelho')->insert(['nome' => 'Caneleira de Peso - 1Kg']);
        DB::table('aparelho')->insert(['nome' => 'Caneleira de Peso - 2Kg']);
        DB::table('aparelho')->insert(['nome' => 'Caneleira de Peso - 5Kg']);
        DB::table('aparelho')->insert(['nome' => 'Caneleira de Peso - 10Kg']);
        DB::table('aparelho')->insert(['nome' => 'Caneleira de Peso - 20Kg']);
        DB::table('aparelho')->insert(['nome' => 'Caneleira de Peso - 50Kg']);
        DB::table('aparelho')->insert(['nome' => 'Anilha - 1Kg']);
        DB::table('aparelho')->insert(['nome' => 'Anilha - 2Kg']);
        DB::table('aparelho')->insert(['nome' => 'Anilha - 5Kg']);
        DB::table('aparelho')->insert(['nome' => 'Anilha - 10Kg']);
        DB::table('aparelho')->insert(['nome' => 'Anilha - 20Kg']);
        DB::table('aparelho')->insert(['nome' => 'Anilha - 50Kg']);
    }
}
