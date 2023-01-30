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
        Schema::create('objetivo', function (Blueprint $table) {
            $table->id();
            $table->nombre();
            $table->valoracion();
            $table->pasosASeguir();
            $table->ingredientes();
            $table->horario(["desayuno","comida","cena"]);
            $table->categoria();
            $table->fechaCreacion();
            $table->Imagen();
            $table->valorNutricional();
            $table->peso();
            $table->idUsuario();
            $table->Validacion();
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
