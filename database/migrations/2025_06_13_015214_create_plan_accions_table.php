<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plan_accions', function (Blueprint $table) {
            $table->id();
            $table->string("criterio");
            $table->string("valoracion")->comment("Critico | Moderadamente aceptable | Aceptable");
            $table->string("color");
            $table->unsignedInteger("minimo")->comment("Valor mínimo aceptable para el criterio");
            $table->unsignedInteger("maximo")->comment("Valor máximo aceptable para el criterio");

            $table->text("accion")->comment("Acción a realizar para mitigar el riesgo o mejorar el cumplimiento del criterio");
            $table->string("color_text")->default("#FFFFFF")->comment("Indica color del texto");

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_accions');
    }
};
