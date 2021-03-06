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
            $table->string('tamaño',10);
            $table->string('tipo_material',100);
            $table->unsignedBigInteger('idMarca');
            $table->foreign('idMarca')->references('id')->on('marca');
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
        Schema::table('producto', function (Blueprint $table){
            $table->dropForeign(['idMarca']);
            $table->dropColumn(['idMarca']);
        });
        Schema::dropIfExists('producto');
    }
}
