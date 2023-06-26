<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogosTable extends Migration
{
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('time_casa');
            $table->string('time_visitante');
            $table->dateTime('data');
            // Adicione mais colunas, se necessário
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jogos');
    }
}
