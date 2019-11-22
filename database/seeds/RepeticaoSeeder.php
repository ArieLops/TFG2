<?php

use Illuminate\Database\Seeder;

class RepeticaoSeeder extends Seeder
{
    public function run()
    {
        DB::table('repeticao')->insert(['repeticao' => '1']);
        DB::table('repeticao')->insert(['repeticao' => '2']);
        DB::table('repeticao')->insert(['repeticao' => '3']);
        DB::table('repeticao')->insert(['repeticao' => '4']);
        DB::table('repeticao')->insert(['repeticao' => '5']);
        DB::table('repeticao')->insert(['repeticao' => '6']);
        DB::table('repeticao')->insert(['repeticao' => '7']);
        DB::table('repeticao')->insert(['repeticao' => '8']);
        DB::table('repeticao')->insert(['repeticao' => '9']);
        DB::table('repeticao')->insert(['repeticao' => '10']);
        DB::table('repeticao')->insert(['repeticao' => '15']);
        DB::table('repeticao')->insert(['repeticao' => '20']);
        DB::table('repeticao')->insert(['repeticao' => '25']);
        DB::table('repeticao')->insert(['repeticao' => '30']);
        DB::table('repeticao')->insert(['repeticao' => '35']);
        DB::table('repeticao')->insert(['repeticao' => '40']);
        DB::table('repeticao')->insert(['repeticao' => '45']);
        DB::table('repeticao')->insert(['repeticao' => '50']);
    }
}
