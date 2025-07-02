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
        Schema::create('grupo_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("grupo_id")->comment("ID del grupo al que está relacionado | Grupo");
            $table->unsignedBigInteger("permission_id")->comment("Permiso id");
            $table->timestamps();

            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade')->onUpdate('cascade');

            $table->unique(['grupo_id', 'permission_id'], 'grupo_permission_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_permissions');
    }
};
