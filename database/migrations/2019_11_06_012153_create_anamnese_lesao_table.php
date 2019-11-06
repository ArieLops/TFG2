<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnamneseLesaoTable extends Migration
{
    public function up()
    {
        Schema::create('anamnese_lesao', function (Blueprint $table) {
            $table->integer('anamnese_id')->unsigned();
            $table->foreign('anamnese_id')->references('id')->on('anamnese')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('lesao_id')->unsigned();
            $table->foreign('lesao_id')->references('id')->on('lesao')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipo')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('local_id')->unsigned();
            $table->foreign('local_id')->references('id')->on('local')->onUpdate('cascade')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('anamnese_lesao');
    }
}
