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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('valoracion');
            $table->text('pasosASeguir');
            $table->foreignId('id_ingrediente')->constrained()->cascadeOnDelete();
            $table->enum('horario',["desayuno","comida","cena"]);
            $table->foreignId('id_categoria')->constrained();
            $table->string('Imagen');
            $table->float('totalNutricional');
            $table->float('peso');
            $table->foreignId('id_usuario')->constrained();
            $table->boolean('Validacion');
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
        Schema::dropIfExists('objetivo');
    }
};
