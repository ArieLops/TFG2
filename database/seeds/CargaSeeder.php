<?php

use Illuminate\Database\Seeder;

class CargaSeeder extends Seeder
{
    public function run()
    {
        DB::table('carga')->insert(['carga' => '1']);
        DB::table('carga')->insert(['carga' => '2']);
        DB::table('carga')->insert(['carga' => '3']);
        DB::table('carga')->insert(['carga' => '4']);
        DB::table('carga')->insert(['carga' => '5']);
        DB::table('carga')->insert(['carga' => '6']);
        DB::table('carga')->insert(['carga' => '7']);
        DB::table('carga')->insert(['carga' => '8']);
        DB::table('carga')->insert(['carga' => '9']);
        DB::table('carga')->insert(['carga' => '10']);
        DB::table('carga')->insert(['carga' => '15']);
        DB::table('carga')->insert(['carga' => '20']);
        DB::table('carga')->insert(['carga' => '25']);
        DB::table('carga')->insert(['carga' => '30']);
        DB::table('carga')->insert(['carga' => '35']);
        DB::table('carga')->insert(['carga' => '40']);
        DB::table('carga')->insert(['carga' => '45']);
        DB::table('carga')->insert(['carga' => '50']);
    }
}
