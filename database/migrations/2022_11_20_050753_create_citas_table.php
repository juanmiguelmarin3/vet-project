<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->foreignId('cedula')->references('id')->on('clientes');
            $table->foreignId('nombre_cliente')->references('id')->on('clientes');
            $table->foreignId('codigo_mascota')->references('id')->on('mascotas');
            $table->foreignId('nombre_mascota')->references('id')->on('mascotas');

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
        Schema::dropIfExists('citas');
    }
};
