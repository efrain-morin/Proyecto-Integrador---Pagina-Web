<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_entradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->dateTime('horaEntrada');
            $table->string('foto');
            $table->bigInteger('idMotivo')->unsigned();
            $table->foreign('idMotivo')
            ->references('id')
            ->on('motivo_entradas')
            ->onDelete('cascade');
            $table->bigInteger('idUsuario')->unsigned();
            $table->foreign('idUsuario')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('registro_entradas');
    }
}
