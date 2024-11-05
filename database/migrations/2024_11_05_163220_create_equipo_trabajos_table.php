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
        Schema::create('equipo_trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('empleado_1_id')->constrained('empleados')->onDelete('cascade');
            $table->foreignId('empleado_2_id')->constrained('empleados')->onDelete('cascade');
            $table->foreignId('vehiculo_id')->constrained('vehiculos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipo_trabajos');
    }
};
