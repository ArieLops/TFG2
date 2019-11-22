<?php

use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    public function run()
    {
        DB::table('serie')->insert(['serie' => '1']);
        DB::table('serie')->insert(['serie' => '2']);
        DB::table('serie')->insert(['serie' => '3']);
        DB::table('serie')->insert(['serie' => '4']);
        DB::table('serie')->insert(['serie' => '5']);
        DB::table('serie')->insert(['serie' => '6']);
        DB::table('serie')->insert(['serie' => '7']);
        DB::table('serie')->insert(['serie' => '8']);
        DB::table('serie')->insert(['serie' => '9']);
        DB::table('serie')->insert(['serie' => '10']);
    }
}
