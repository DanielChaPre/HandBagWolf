<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('modelo',50);
            $table->decimal('precio', 13, 2)->default(0);
            $table->string('marca',50);
            $table->string('tamaño',10);
            $table->string('tipo_material',100);
            $table->timestamps();
        });

        Schema::table('detalleventa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalleventa', function (Blueprint $table){
            $table->dropForeign(['id_producto']);
            $table->dropColumn(['id_producto']);
        });
        Schema::dropIfExists('producto');
    }
}
