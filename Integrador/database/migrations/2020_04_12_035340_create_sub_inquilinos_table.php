<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_inquilinos', function (Blueprint $table) {
            $table->bigIncrements('idSubInquilino');
            $table->bigInteger('idInquilino')->unsigned();
            $table->foreign('idinquilino')
            ->references('id')
            ->on('inquilinos')
            ->onDelete('cascade');
            $table->bigInteger('idUsuario')->unsigned();
            $table->foreign('idUsuario')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->date('fechaLimite');
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
        Schema::dropIfExists('sub_inquilinos');
    }
}
