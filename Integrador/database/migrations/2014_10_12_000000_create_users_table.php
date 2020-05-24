<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('fechaNacimiento');
            $table->string('CURP')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefono');
            $table->string('celular');
            $table->string('password');
            $table->bigInteger('idPermiso')->unsigned();
            $table->bigInteger('idTipoUsuario')->unsigned();
            $table->bigInteger('idInmueble')->unsigned()->nullable();
            $table->bigInteger('idDepartamento')->unsigned()->nullable();
            $table->foreign('idTipoUsuario')->references('id')->on('tipo_usuarios')->onDelete('cascade');
            $table->foreign('idPermiso')->references('id')->on('permisos')->onDelete('cascade');
            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');
            $table->foreign('idDepartamento')->references('id')->on('departamentos')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
