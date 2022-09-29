<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('calle');
            $table->string('numero');
            $table->string('piso')->nullable();
            $table->string('dpto')->nullable();
            $table->string('localidad');
            $table->string('provincia');
            $table->string('codigoPostal');
            $table->string('telContacto')->nullable();
            $table->string('referencia')->nullable();
            $table->string('user');
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
        Schema::dropIfExists('direccions');
    }
}
