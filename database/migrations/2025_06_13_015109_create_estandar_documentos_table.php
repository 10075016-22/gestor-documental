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
        Schema::create('estandar_documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("estandar_id")->comment("ID del estandar al que se le asigna el documento");
            $table->unsignedBigInteger("documento_id")->comment("ID del tipo de documento asociado al estandar");

            $table->timestamps();
            $table->softDeletes();
            // Foreign keys
            $table->foreign("estandar_id")->references("id")->on("estandars")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("documento_id")->references("id")->on("documentos")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estandar_documentos');
    }
};
