<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
   
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('doc', 10);
            $table->string('nombre',50);
            $table->string('apellidos',50);
            $table->string('correo',50)->unique();
            $table->string('clave',64);
            $table->timestamp('registro')->useCurrent();

            $table->primary('doc');
        });
    }


    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
