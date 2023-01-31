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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('contrasenya');
            $table->foreignId('id_objetivo')->constrained()->cascadeOnDelete();
            $table->foreignId('id_receta')->constrained()->cascadeOnDelete();//recetasFavoritas
            $table->foreignId('id_ingrediente')->constrained()->cascadeOnDelete();//alergias;
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
        Schema::dropIfExists('usuario');
    }
};
