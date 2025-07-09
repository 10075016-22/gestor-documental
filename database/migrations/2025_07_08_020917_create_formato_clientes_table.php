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
        Schema::create('formato_clientes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("cliente_id")->nullable();
            $table->unsignedBigInteger("formato_id");
            $table->unsignedBigInteger("ciclo_id");
            $table->unsignedBigInteger("ciclo_estandar_id");
            $table->unsignedBigInteger("ciclo_sub_estandar_id");
            $table->unsignedBigInteger("ciclo_item_estandars_id");

            $table->unsignedTinyInteger("cumple")->nullable()->comment("El archivo cumple totalmente ? 1: si - 0: no");
            $table->unsignedTinyInteger("justifica")->nullable()->comment("Justifica 1, No justifica 0");
            $table->text("observacion")->comment("Observación adicional")->nullable();
            $table->decimal("calificacion", 8, 2)->default(0)->comment('Calificación obtenida F: SI cumple = 1 ? toma el valor del item SINO SI justifica toma el valor del item SINO 0 ');
            $table->unsignedTinyInteger("preview")->default(0)->comment("Este campo se usa cómo flag para devolver los que son solo de prueba");

            $table->timestamps();

            // onDelete("cascade")->onUpdate("cascade")
            
            $table->foreign("formato_id")->references("id")->on("formatos");
            $table->foreign("cliente_id")->references("id")->on("clientes");
            $table->foreign("ciclo_id")->references("id")->on("ciclos");
            $table->foreign("ciclo_estandar_id")->references("id")->on("ciclo_estandars");
            $table->foreign("ciclo_sub_estandar_id")->references("id")->on("ciclo_estandar_sub_estandars");
            $table->foreign("ciclo_item_estandars_id")->references("id")->on("ciclo_item_estandars");
            
            $table->index([ 'formato_id', 'cliente_id', 'ciclo_id', 'ciclo_estandar_id'], 'idx_ciclo_cliente_estandar');
            $table->index([ 'formato_id', 'cliente_id', 'ciclo_item_estandars_id'], 'idx_cliente_item');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formato_clientes');
    }
};
