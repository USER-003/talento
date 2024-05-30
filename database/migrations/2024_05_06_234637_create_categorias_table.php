<?php
// database/migrations/xxxx_xx_xx_create_categorias_de_servicios_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categorias_de_servicios', function (Blueprint $table) {
            $table->id('id_categoria');
            $table->string('nombre_categoria', 255);
            $table->text('descripcion_categoria')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias_de_servicios');
    }
};
