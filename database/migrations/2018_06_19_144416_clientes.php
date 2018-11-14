<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clientes',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('nombre',100); 
            $table->string('email',50);
            $table->string('pass',10);
            $table->string('id_reservacion',10);
            $table->string('id_contacto',10);  
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('clientes'); //
    }
}
