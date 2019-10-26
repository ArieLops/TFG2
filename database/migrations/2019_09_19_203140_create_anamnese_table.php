<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnamneseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anamnese', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('pessoa_id')->unsigned();
			$table->foreign('pessoa_id')->references('id')->on('pessoa')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('condicionamento');
			$table->date('dataUltimoCheckup');
			$table->integer('tipoSanguineo');
			$table->integer('atividadeOcupacional');
			$table->float('pressaoSistolica');
			$table->float('pressaoDiastolica');
			$table->float('glicose');
			$table->float('triglicerideos');
			
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
		Schema::drop('anamnese');
	}

}
