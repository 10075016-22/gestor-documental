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
        Schema::create('planeacion_documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cliente_id");
            $table->unsignedBigInteger("documento_id");

            $table->date("fecha_fin")->nullable()->comment("Fecha máxima para subir el documento");
            $table->text("observaciones")->nullable()->comment("Observaciones adicionales a esta planeación");
            $table->unsignedTinyInteger("estado")->comment("1: Completado | 0: Incompleto")->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign("cliente_id")->references("id")->on("clientes")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("documento_id")->references("id")->on("documentos")->onDelete("cascade")->onUpdate("cascade");

            // index
            $table->unique(['cliente_id', 'documento_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planeacion_documentos');
    }
};
