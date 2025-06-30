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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_documento_id')->comment('Tipo de documento relacionado');

            $table->string('nombre')->comment('Nombre del documento');
            $table->text('descripcion')->nullable()->comment('Descripción del documento');
            $table->unsignedTinyInteger("obligatorio")->default(0)->comment('Indica si el documento es obligatorio (1) o no (0)');
            $table->unsignedTinyInteger("generaFormato")->default(0)->comment('Indica si el documento genera un formato (1) o no (0)');
            $table->text('plantilla')->nullable()->comment('Plantilla del documento, si aplica');

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos')->onDelete('cascade')->onUpdate('cascade');

            $table->index(['tipo_documento_id'], 'idx_tipo_documento_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
