<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('proveedores');
        Schema::create('proveedores', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('id_admin');
            $table->string('nombreproveedor');
            $table->string('nif');
            $table->string('contacto');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('municipio');
            $table->string('codigopostal');
            $table->string('provincia');

        });

        Schema::table('proveedores', function($table) {
            $table->foreign('id_admin')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('proveedores');
    }
}
