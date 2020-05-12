<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idDepartamento')->unsigned();
            $table->foreign('idDepartamento')
            ->references('id')
            ->on('departamentos')
            ->onDelete('cascade');
            $table->bigInteger('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')
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
        Schema::dropIfExists('inquilinos');
    }
}
