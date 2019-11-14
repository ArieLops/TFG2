<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreinoTable extends Migration {

	public function up()
	{
		Schema::create('treino', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('users_id')->unsigned();
			$table->foreign('users_id')->references('id')->on('users');
			$table->float('serie');
			$table->float('repeticao');
			$table->float('carga');
			$table->float('intervalo');
			$table->float('cadencia');
			$table->timestamps();
			$table->time('deleted_at')->nullable();
		});
	}
	
	public function down()
	{
		Schema::drop('treino');
	}

}
