<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreinoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('treino', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('descricao', 200);
			$table->dateTime('dia_cadastrado');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('treino');
	}

}
