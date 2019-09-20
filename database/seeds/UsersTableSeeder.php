<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Users;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        Users::create([
            'name' => 'Ariel Lopes de Almeida',
            'email' => 'ariel@teste.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
