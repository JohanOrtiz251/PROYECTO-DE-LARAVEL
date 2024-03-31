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
        Schema::create('recolectas', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('empleado');
            $table->string('tipo');
            $table->string('cantidad');
            $table->string('lote');
            $table->string('observacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recolectas');
    }
};
