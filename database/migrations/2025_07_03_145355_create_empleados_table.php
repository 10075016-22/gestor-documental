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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger("tipoidentificacion_id"); // Tipo de documento
            $table->unsignedBigInteger("cliente_id"); // id de cliente

            $table->string("nrodocumento", 15);
            $table->string("nombre", 1000);
            $table->string("apellidos", 1000);
            $table->string("email");
            $table->string("telefono", 12);
            $table->date("fecha_ingreso");
            $table->string("cargo");
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("tipoidentificacion_id")->references("id")->on("tipo_identificacions")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("cliente_id")->references("id")->on("clientes")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
