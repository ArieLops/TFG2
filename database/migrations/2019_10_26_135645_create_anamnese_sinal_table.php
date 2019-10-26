<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnamneseSinalTable extends Migration
{
    public function up()
    {
        Schema::create('anamnese_sinal', function (Blueprint $table) {
            $table->integer('anamnese_id')->unsigned();
            $table->foreign('anamnese_id')->references('id')->on('anamnese')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sinal_id')->unsigned();
            $table->foreign('sinal_id')->references('id')->on('sinal')->onUpdate('cascade')->onDelete('cascade');
            $table->string('comentario', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('anamnese_sinal');
    }
}
