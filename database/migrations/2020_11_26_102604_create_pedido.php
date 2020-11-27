<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->timestamps();
        });

      /*  Schema::table('detalleventa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pedido');
            $table->foreign('id_pedido')->references('id')->on('pedido');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::table('detalleventa', function (Blueprint $table){
            $table->dropForeign(['id_pedido']);
            $table->dropColumn(['id_pedido']);
        });*/
        Schema::dropIfExists('pedido');
    }
}
