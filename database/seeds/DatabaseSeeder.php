<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ExercicioSeeder::class);
        $this->call(MusculaturaSeeder::class);
        $this->call(Exercicio_MusculaturaSeeder::class);
        $this->call(SinalSeeder::class);
    }
}
