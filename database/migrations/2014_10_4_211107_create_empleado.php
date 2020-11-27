<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        /*Schema::table('venta', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empleados');
            $table->foreign('id_empleados')->references('id')->on('empleado');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::table('venta', function (Blueprint $table){
            $table->dropForeign(['id_empleados']);
            $table->dropColumn(['id_empleados']);
        });*/
        Schema::dropIfExists('empleado');
    }
}
