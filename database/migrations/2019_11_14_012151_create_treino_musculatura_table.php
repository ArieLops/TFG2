<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreinoMusculaturaTable extends Migration
{

    public function up()
    {
        Schema::create('treino_musculatura', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('treino_id')->unsigned();
            $table->foreign('treino_id')->references('id')->on('treino')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('musculatura_id')->unsigned();
            $table->foreign('musculatura_id')->references('id')->on('musculatura')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('treino_musculatura');
    }
}
