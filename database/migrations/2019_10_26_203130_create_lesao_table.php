<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLesaoTable extends Migration
{
    public function up()
    {
        Schema::create('lesao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lesao');
    }
}
