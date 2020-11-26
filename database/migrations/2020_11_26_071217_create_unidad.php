<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::table('materiales', function (Blueprint $table) {
            $table->unsignedBigInteger('id_uni');
            $table->foreign('id_uni')->references('id')->on('unidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiales', function (Blueprint $table){
            $table->dropForeign(['id_uni']);
            $table->dropColumn(['id_uni']);
        });

        Schema::dropIfExists('unidad');
    }
}
