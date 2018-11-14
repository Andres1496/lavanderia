<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('nombre',100); 
            $table->string('tipo',200);
            $table->string('tipo_productos',100);
            $table->string('direccion',150);
            $table->string('nombreRepresentante',100);
            $table->string('email',50);
            $table->string('telefono',15);
            $table->string('mensaje',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('proveedor');  //
    }
}
