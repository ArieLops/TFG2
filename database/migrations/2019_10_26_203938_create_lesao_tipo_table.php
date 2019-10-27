<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLesaoTipoTable extends Migration
{

    public function up()
    {
        Schema::create('lesao_tipo', function (Blueprint $table) {
            $table->integer('lesao_id')->unsigned();
            $table->foreign('lesao_id')->references('id')->on('lesao')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipo')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lesao_tipo');
    }
}
