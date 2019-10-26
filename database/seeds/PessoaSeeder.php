<?php

use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    public function run()
    {
        DB::table('pessoa')->insert(['objetivo_id' => '1', 'nome' => 'João', 'data_nascimento' => '01/02/1990', 'sexo' => 'M', 'cpf' => '04605758275', 'rg' => '9847652967', 'email' => 'joao@teste.com.br', 'telefone' => '975264752']);
    }
}
