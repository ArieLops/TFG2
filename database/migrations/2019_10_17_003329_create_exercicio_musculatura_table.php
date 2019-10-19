<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicioMusculaturaTable extends Migration
{
    
    public function up()
    {
        Schema::create('exercicio_musculatura', function (Blueprint $table) {
            $table->integer('exercicio_id')->unsigned();
            $table->foreign('exercicio_id')->references('id')->on('exercicio')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('musculatura_id')->unsigned();
            $table->foreign('musculatura_id')->references('id')->on('musculatura')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('exercicio_musculatura');
    }
}
