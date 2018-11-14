<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contacto',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('nombre',100); 
            $table->string('email',100);
            $table->string('asunto',150);
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
              Schema::dropIfExists('contacto');
    }
}