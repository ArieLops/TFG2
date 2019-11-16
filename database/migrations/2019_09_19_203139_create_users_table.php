<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('objetivo_id')->unsigned()->nullable();
			$table->foreign('objetivo_id')->references('id')->on('objetivo')->onUpdate('cascade')->onDelete('cascade')->nullable();
			$table->string('name');
			$table->string('foto', 45)->nullable();
			$table->date('data_nascimento')->nullable();
			$table->enum('sexo', array('M','F'))->nullable();
			$table->string('cpf', 15)->nullable();
			$table->string('rg', 15)->nullable();
			$table->string('email')->unique();
			$table->string('telefone', 45)->nullable();
			$table->string('user_type', 50)->default('user')->nullable();
			$table->string('password')->default(bcrypt('123456'));
			$table->string('tipo')->default('0');
			$table->timestamps();
			$table->time('deleted_at')->nullable();
		});
	}
	public function down()
	{
		Schema::drop('users');
	}
}