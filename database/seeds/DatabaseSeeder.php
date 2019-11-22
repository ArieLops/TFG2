<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ExercicioSeeder::class);
        $this->call(AparelhoSeeder::class);
        $this->call(MusculaturaSeeder::class);
        $this->call(Exercicio_MusculaturaSeeder::class);
        $this->call(SinalSeeder::class);
        $this->call(ObjetivoSeeder::class);
        $this->call(LesaoSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(LocalSeeder::class);
        $this->call(AvaliacaoSeeder::class);
        $this->call(SerieSeeder::class);
        $this->call(RepeticaoSeeder::class);
        $this->call(CargaSeeder::class);
    }
}
