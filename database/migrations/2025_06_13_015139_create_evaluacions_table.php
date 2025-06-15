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
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id')->comment('ID del cliente al que se le asigna la evaluación');
            $table->unsignedBigInteger('ciclo_item_estandars_id')->comment('ID del item de estandar | Se usa porque la formular usa el campo de valor');
            $table->unsignedTinyInteger("cumpliento")->default(0)->comment("Cumple | No cumple");
            $table->text('observacion')->nullable()->comment('Observación de la evaluación');
            $table->decimal("calificacion")->nullable()->comment("Calificacion segun formula");

            $table->timestamps();
            $table->softDeletes();
            // Foreign keys
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ciclo_item_estandars_id')->references('id')->on('ciclo_item_estandars')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacions');
    }
};
