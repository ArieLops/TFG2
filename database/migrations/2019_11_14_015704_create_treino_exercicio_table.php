<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreinoExercicioTable extends Migration
{

    public function up()
    {
        Schema::create('treino_exercicio', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('treino_id')->unsigned();
            $table->foreign('treino_id')->references('id')->on('treino')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('exercicio_id')->unsigned();
            $table->foreign('exercicio_id')->references('id')->on('exercicio')->onUpdate('cascade')->onDelete('cascade');
        
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('treino_exercicio');
    }
}
