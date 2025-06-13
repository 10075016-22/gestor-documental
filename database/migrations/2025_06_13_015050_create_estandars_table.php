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
        Schema::create('estandars', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->comment("Nombre del estandar");
            $table->text("descripcion")->nullable()->comment("Descripción del estandar");
            $table->unsignedInteger("cantidad")->default(0)->comment("Cantidad de subestandares relacionados con este estandar");

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estandars');
    }
};
