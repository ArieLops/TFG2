<?php
use Illuminate\Database\Seeder;
use App\Http\Models\Users;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
         'name' => 'Administrador',
         'email' => 'admin@teste.com.br',
         'user_type' => 'admin',
         'tipo' => '1',
         'password' => bcrypt('123456')]);
         
         DB::table('users')->insert([
          'name' => 'Praticante',
          'email' => 'praticante@teste.com.br', 
          'user_type' => 'user', 
          'tipo' => '0',
          'password' => bcrypt('123456')]); 
    }
}