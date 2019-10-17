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
			$table->increments('id');
			/* $table->integer('pessoa_id')->unsigned();
			$table->foreign('pessoa_id')->references('id')->on('pessoa')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('objetivo_id')->unsigned();
			$table->foreign('objetivo_id')->references('id')->on('objetivo')->onUpdate('cascade')->onDelete('cascade'); */
			$table->dateTime('dtCadastro');
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
		Schema::drop('treino');
	}

}
