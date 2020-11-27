<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->string('folio', 7);
            $table->string('descripcion', 100);
            $table->double('constotal');
            $table->unsignedBigInteger('idProveedor');
            $table->foreign('idProveedor')->references('id')->on('proveedor');
            $table->timestamps();
        });

        Schema::create('DCompra', function (Blueprint $table) {
            $table->id();
            $table->string('producto', 100);
            $table->integer('cantidad');
            $table->double('constounitario');
            $table->double('costoTotalxP');
            $table->unsignedBigInteger('idCompra');
            $table->foreign('idCompra')->references('id')->on('compra');
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
        Schema::dropIfExists('compra');
        Schema::dropIfExists('DCompra');
    }
}
