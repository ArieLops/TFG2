<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExercicioTable extends Migration {

	public function up()
	{
		Schema::create('exercicio', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nome')->unique();
			$table->timestamps();
			$table->time('deleted_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('exercicio');
	}

}
