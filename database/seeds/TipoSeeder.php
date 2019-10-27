<?php

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipo')->insert(['nome' => 'Ósseo']);
        DB::table('tipo')->insert(['nome' => 'Muscular']);
        DB::table('tipo')->insert(['nome' => 'Articular']);
    }
}
