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

			$table->integer('users_id')->unsigned();
			$table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
