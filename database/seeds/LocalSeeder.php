<?php

use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    public function run()
    {
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Costelas']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Fêmur']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Fíbula']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Tarso']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Metatarso']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Falanges']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Patela']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Carpo']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Rádio']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Ulna']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Úmero']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Clavícula']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Escápula']);
        DB::table('local')->insert(['tipo_id' => '1', 'nome' => 'Crânio']);
        DB::table('local')->insert(['tipo_id' => '2', 'nome' => 'Braço']);
        DB::table('local')->insert(['tipo_id' => '2', 'nome' => 'Antebraço']);
        DB::table('local')->insert(['tipo_id' => '2', 'nome' => 'Perna']);
        DB::table('local')->insert(['tipo_id' => '2', 'nome' => 'Coxa']);
        DB::table('local')->insert(['tipo_id' => '2', 'nome' => 'Abdome']);
        DB::table('local')->insert(['tipo_id' => '2', 'nome' => 'Glúteos']);
        DB::table('local')->insert(['tipo_id' => '2', 'nome' => 'Ombro']);
        DB::table('local')->insert(['tipo_id' => '2', 'nome' => 'Peito']);
        DB::table('local')->insert(['tipo_id' => '3', 'nome' => 'Punho']);
        DB::table('local')->insert(['tipo_id' => '3', 'nome' => 'Joelho']);
        DB::table('local')->insert(['tipo_id' => '3', 'nome' => 'Coluna']);
        DB::table('local')->insert(['tipo_id' => '3', 'nome' => 'Tornozelo']);
        DB::table('local')->insert(['tipo_id' => '3', 'nome' => 'Ombro']);
        DB::table('local')->insert(['tipo_id' => '3', 'nome' => 'Cotovelo']);
        DB::table('local')->insert(['tipo_id' => '3', 'nome' => 'Quadril']);
    }
}
