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
        Schema::create('ciclo_estandars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ciclo_id")->comment("Ciclo relacionado al estandar principal");

            $table->string("nombre");
            $table->text("descripcion")->nullable()->comment("Descripción del estandar");
            $table->decimal("porcentaje", 5, 2)->default(0.00)->comment("Porcentaje de valoracion del estandar ejemplo: 10%");

            $table->timestamps();
            $table->softDeletes();

            $table->foreign("ciclo_id")->references("id")->on("ciclos")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciclo_estandars');
    }
};
