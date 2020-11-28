<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('fechaNac', 100);
            $table->string('colonia',100);
            $table->string('calle', 100);
            $table->integer('numExt');
            $table->integer('cp');
            $table->string('correo',100);
            $table->integer('telefono');
            $table->string('rfc',100);
            $table->unsignedBigInteger('idUsuario');
           $table->foreign('idUsuario')->references('id')->on('users');
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
        Schema::dropIfExists('cliente');
    }
}
