<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exame', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('praticante_id')->nullable();
			$table->dateTime('dataRealizado')->nullable();
			$table->string('arquivo')->nullable();
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
		Schema::drop('exame');
	}

}
