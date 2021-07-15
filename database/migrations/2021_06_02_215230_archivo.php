<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Archivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('archivos');
        Schema::create('archivos', function (Blueprint $table)

        {

            $table->increments('id');
            $table->unsignedInteger('id_proveedor');
            $table->unsignedInteger('id_comunidad');
            $table->string('lopd')->nullable();
            $table->string('visita')->nullable();
            $table->string('informe')->nullable();

        });

        Schema::table('archivos', function($table) {
            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete('cascade');
            $table->foreign('id_comunidad')->references('id')->on('comunidades')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('archivos');
    }
}
