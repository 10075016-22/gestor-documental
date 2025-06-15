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
        Schema::create('tipo_documentos', function (Blueprint $table) {
            $table->id();
            
            $table->string('nombre')->unique()->comment('Nombre del tipo de documento');
            $table->string('descripcion')->nullable()->comment('Descripción del tipo de documento');
            $table->string("tipoArchivo")->nullable()->comment("Tipo de archivo permitido | application/pdf, image/jpeg, etc.");
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_documentos');
    }
};
