<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreinoRepeticaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treino_repeticao', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('treino_id')->unsigned();
            $table->foreign('treino_id')->references('id')->on('treino')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('repeticao_id')->unsigned();
            $table->foreign('repeticao_id')->references('id')->on('repeticao')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('treino_repeticao');
    }
}
