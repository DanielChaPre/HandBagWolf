<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fechaRegistro');
            $table->dateTime('fechaEntrega');
            $table->string('Estatus',30);
            $table->string('Folio',7);
            $table->Integer('costoTotal');
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('cliente');
            $table->unsignedBigInteger('idEmpleado');
            $table->foreign('idEmpleado')->references('id')->on('empleado');
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
        Schema::dropIfExists('venta');
    }
}
