<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comunidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::dropIfExists('comunidades');
        Schema::create('comunidades', function (Blueprint $table) {

            $table->increments('id');
            $table->string('id_proveedor1')->nullable();
            $table->string('id_proveedor2')->nullable();
            $table->string('id_proveedor3')->nullable();
            $table->string('comunidad');
            $table->string('numerodevecinos');
            $table->string('nif');
            $table->string('cp');
            $table->string('municipio');
            $table->string('provincia');
            $table->string('precio');
            $table->string('direccion');
            $table->string('visita');
            $table->string('tecnico');
            $table->string('administrador');
            $table->string('foto')->nullable();

        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comunidades');
    }
}
