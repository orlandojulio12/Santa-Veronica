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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_rest');
            $table->string('ubicacion_rest');
            $table->bigInteger('telefono_rest');
            $table->string('correo_rest');
            $table->string('desc_rest', 500);
            $table->string('foto_1_rest')->nullable();
            $table->string('foto_2_rest')->nullable();
            $table->string('foto_3_rest')->nullable();
            $table->string('foto_4_rest')->nullable();
            $table->string('foto_5_rest')->nullable();
            $table->string('logo_rest')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
