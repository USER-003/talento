<?php
// database/migrations/xxxx_xx_xx_create_servicios_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id('id_servicios');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias_de_servicios')->onDelete('cascade');
            $table->string('nombre_servicio', 255); //
            $table->string('descripcion_servicio', 255)->nullable(); //campo opcional
            $table->decimal('precio', 10, 2);
            $table->string('email', 255);
            $table->text('numero_contacto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
};
