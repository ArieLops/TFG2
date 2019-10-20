<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjetivoTable extends Migration {

	public function up()
	{
		Schema::create('objetivo', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('nome', 45);
			$table->timestamps();
			$table->time('deleted_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('objetivo');
	}

}
