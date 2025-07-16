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
        Schema::create('historico_documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("planeacion_documento_id")->comment("Corresponde al registro de planeacion del documento");
            $table->unsignedBigInteger("user_id")->comment("Usuario que realizo la accion");
            $table->unsignedBigInteger("ciclo_item_estandar_id")->comment("Item estandar");
            $table->text("document")->comment("documento cargado");
            $table->text("observaciones")->nullable()->comment("observaciones adicionales");            
            $table->timestamps();

            $table->softDeletes();

            $table->foreign("planeacion_documento_id")->references("id")->on("planeacion_documentos")->onUpdate("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onUpdate("cascade");
            $table->foreign("ciclo_item_estandar_id")->references("id")->on("ciclo_item_estandars")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico_documentos');
    }
};
