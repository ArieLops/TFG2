<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('nome', 45);
			$table->string('foto', 45)->nullable();
			$table->date('data_nascimento')->nullable();
			$table->enum('sexo', array('M','F'));
			$table->string('cpf', 15)->nullable();
			$table->string('rg', 15)->nullable();
			$table->string('email', 30);
			$table->string('telefone', 45)->nullable();
			$table->string('tipo', 1);
			$table->timestamps();
			$table->time('deleted_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pessoa');
	}

}
