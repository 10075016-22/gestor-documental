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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('Nombre del cliente');
            $table->string("nit")->unique()->comment('Número de identificación del cliente');
            $table->string('email')->comment('Correo electrónico del cliente');
            $table->string('direccion')->nullable()->comment('Dirección del cliente');
            $table->string('telefono')->nullable()->comment('Número de teléfono del cliente');
            $table->text("logo")->nullable()->comment('Logo del cliente');
            $table->unsignedTinyInteger('estado')->default(1)->comment('Estado del cliente: 1=Activo, 0=Inactivo');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
