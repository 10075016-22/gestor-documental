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
        Schema::create('ciclo_estandar_sub_estandars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ciclo_estandar_id")->comment("Estandar principal relacionado");

            $table->string("nombre");
            $table->text("descripcion")->nullable()->comment("Descripción del subestandar");
            $table->decimal("porcentaje", 5, 2)->default(0.00)->comment("Porcentaje de valoracion del subestandar | debe ser menor o igual al porcentaje del estandar padre");
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("ciclo_estandar_id")->references("id")->on("ciclo_estandars")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciclo_estandar_sub_estandars');
    }
};
