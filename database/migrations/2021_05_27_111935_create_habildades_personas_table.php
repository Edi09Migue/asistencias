<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabildadesPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habildades_personas', function (Blueprint $table) {
            $table->id();
           //definir la relación falta sale errorgit   
            $table->string('nombres');
            $table->integer('porcentajes'); 
            $table->integer('orden'); 
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
        Schema::dropIfExists('habildades_personas');
    }
}
