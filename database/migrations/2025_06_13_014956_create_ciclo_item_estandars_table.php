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
        Schema::create('ciclo_item_estandars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ciclo_sub_estandar_id")->comment("Subestandar relacionado");
            $table->unsignedBigInteger("documento_id")->comment("Documento relacionado")->nullable();

            $table->string("nombre")->comment("Nombre del item estandar");
            $table->text("descripcion")->nullable()->comment("Descripción del item estandar");
            $table->decimal("valor")->default(0)->comment("Porcentaje de valoración del item estandar | debe ser menor o igual al porcentaje del subestandar padre");
            
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("ciclo_sub_estandar_id")->references("id")->on("ciclo_estandar_sub_estandars")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("documento_id")->references("id")->on("documentos")->onDelete("set null")->onUpdate("cascade");
            $table->index(['ciclo_sub_estandar_id'], 'idx_ciclo_sub_estandar_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciclo_item_estandars');
    }
};
