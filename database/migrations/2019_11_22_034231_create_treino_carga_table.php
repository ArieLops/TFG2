<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreinoCargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treino_carga', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('treino_id')->unsigned();
            $table->foreign('treino_id')->references('id')->on('treino')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('carga_id')->unsigned();
            $table->foreign('carga_id')->references('id')->on('carga')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treino_carga');
    }
}
