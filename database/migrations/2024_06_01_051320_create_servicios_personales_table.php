<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('servicios_personales', function (Blueprint $table) {
            $table->id('id_servicios_personales');
            $table->unsignedBigInteger('id_servicio');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_servicio')->references('id_servicio')->on('servicios')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->date('fecha_contratacion');
            $table->date('estado_contratacion');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios_personales');
    }
};
