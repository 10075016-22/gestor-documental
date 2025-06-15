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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('module');
            $table->string('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('name')->nullable();
            $table->unsignedInteger('order')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
            $table->unsignedBigInteger('permission_id')->nullable()->comment("Permiso asociado al modulo");
            $table->unsignedTinyInteger("divider")->default(0)->comment("Indica si el registro es un divisor");
            $table->timestamps();

            $table->softDeletes();
            $table->foreign('permission_id')->references('id')->on('permissions');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
