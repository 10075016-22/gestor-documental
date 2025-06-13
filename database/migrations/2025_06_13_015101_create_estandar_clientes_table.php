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
        Schema::create('estandar_clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cliente_id")->comment("ID del cliente al que se le asigna el estandar");
            $table->unsignedBigInteger("estandar_id")->comment("ID del estandar asignado al cliente");


            $table->timestamps();
            $table->softDeletes();
            // Foreign keys
            $table->foreign("cliente_id")->references("id")->on("clientes")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("estandar_id")->references("id")->on("ciclo_estandars")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estandar_clientes');
    }
};
