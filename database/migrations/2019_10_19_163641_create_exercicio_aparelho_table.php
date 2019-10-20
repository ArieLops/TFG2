<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicioAparelhoTable extends Migration
{
    public function up()
    {
        Schema::create('exercicio_aparelho', function (Blueprint $table) {
            $table->integer('exercicio_id')->unsigned();
            $table->foreign('exercicio_id')->references('id')->on('exercicio')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('aparelho_id')->unsigned();
            $table->foreign('aparelho_id')->references('id')->on('aparelho')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('exercicio_aparelho');
    }
}
