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
            $table->timestamps();
        });

        Schema::table('venta', function (Blueprint $table) {
            $table->unsignedBigInteger('id_detalle');
            $table->foreign('id_detalle')->references('id')->on('detalleventa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venta', function (Blueprint $table){
            $table->dropForeign(['id_detalle']);
            $table->dropColumn(['id_detalle']);
        });
        Schema::dropIfExists('detalleventa');
    }
}
