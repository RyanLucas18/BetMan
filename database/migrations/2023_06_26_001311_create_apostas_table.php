<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApostasTable extends Migration
{
    public function up()
    {
        Schema::create('apostas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jogo_id');
            $table->enum('resultado', ['casa', 'visitante', 'empate']);
            $table->timestamps();

            $table->foreign('jogo_id')->references('id')->on('jogos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('apostas');
    }
}

