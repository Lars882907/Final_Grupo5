<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
   
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id');
            $table->foreignId('tipo_id');
            $table->tinyInteger('piso');
            $table->tinyInteger('numero');
            $table->bigInteger('precio');
            $table->boolean('minibar');
            $table->tinyInteger('capacidad');

            /* duda migracion */
            $table->foreign('hotel_id')->references('id')->on('hoteles');
            $table->foreign('tipo_id')->references('id')->on('tipo_habitaciones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
