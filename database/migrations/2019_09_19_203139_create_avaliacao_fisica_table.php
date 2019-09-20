<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvaliacaoFisicaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avaliacao_fisica', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('praticante_id');
			$table->date('dataInicial');
			$table->date('dataFinal');
			$table->float('massa');
			$table->float('estatura');
			$table->float('peitoral');
			$table->float('axMedio');
			$table->float('subEscapular');
			$table->float('tricipital');
			$table->float('bicipital');
			$table->float('supraIliaca');
			$table->float('abdominal');
			$table->float('coxa');
			$table->float('panturrilha');
			$table->float('torax');
			$table->float('bracoDireito');
			$table->float('bracoEsquerdo');
			$table->float('antebracoDireito');
			$table->float('antebracoEsquerdo');
			$table->float('cintura');
			$table->float('quadril');
			$table->float('coxaDireita');
			$table->float('coxaEsquerda');
			$table->float('pernaDireita');
			$table->float('pernaEsquerda');
			$table->float('frequenciaCardiaca');
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
		Schema::drop('avaliacao_fisica');
	}

}
