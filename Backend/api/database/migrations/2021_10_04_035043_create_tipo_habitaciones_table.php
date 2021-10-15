<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoHabitacionesTable extends Migration
{
    
    public function up()
    {
        Schema::create('tipo_habitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('tipo_habitaciones');
    }
}
