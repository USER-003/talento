<?php
// database/migrations/xxxx_xx_xx_create_servicios_personales_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('servicios_personales', function (Blueprint $table) {
            $table->id('id_servicios_personales');
            $table->unsignedBigInteger('id_servicios');
            $table->foreign('id_servicios')->references('id_servicios')->on('servicios')->onDelete('cascade');
            $table->unsignedBigInteger('id_usuarios');
            $table->foreign('id_usuarios')->references('id_usuarios')->on('usuarios')->onDelete('cascade');
            $table->date('fecha_contratacion');
            $table->date('estado_contratacion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios_personales');
    }
};
