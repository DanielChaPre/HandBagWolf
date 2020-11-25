<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
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

            Schema::table('empleado', function (Blueprint $table){
                $table->unsignedBigInteger('idPersona');
                $table->foreign('idPersona')->references('id')->on('persona');
                $table->unsignedBigInteger('idUsuario');
                $table->foreign('idUsuario')->references('id')->on('users');
            });
    }

    public function down()
    {

        Schema::table('empleado',function(Blueprint $table){
            $table->dropForeign(['idPersona']);
            $table->dropColumn('idPersona');
        });

        Schema::dropIfExists('persona');
    }
}
