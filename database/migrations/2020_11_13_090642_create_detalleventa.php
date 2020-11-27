<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleventa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidadproducto');
            $table->double('preciounitario');
            $table->double('totalxproducto');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('producto');
            $table->unsignedBigInteger('idVenta');
            $table->foreign('idVenta')->references('id')->on('venta');
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
        Schema::dropIfExists('detalleventa');
    }
}
