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
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias_de_servicios')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->string('nombre_servicio', 255);
            $table->string('descripcion_servicio', 255);
            $table->decimal('precio', 10, 2);
            $table->string('imagen', 255)->nullable();
            $table->text('numero_contacto');
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
