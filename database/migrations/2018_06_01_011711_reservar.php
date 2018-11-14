<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('nombre',50); 
            $table->string('dir',100);
            $table->string('telefono',15);
            $table->string('email',100);
            $table->string('ropaBlanca',15);
            $table->string('ropaColor',15);
            $table->string('cobijaCobertor',15);
            $table->string('horario',15);
            $table->string('fecha',15);
            $table->rememberToken();
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
              Schema::dropIfExists('reservacion');
    }
}