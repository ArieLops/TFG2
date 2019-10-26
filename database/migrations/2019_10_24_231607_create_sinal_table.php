<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinalTable extends Migration
{
    public function up()
    {
        Schema::create('sinal', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome', 255);
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
        Schema::dropIfExists('sinal');
    }
}
