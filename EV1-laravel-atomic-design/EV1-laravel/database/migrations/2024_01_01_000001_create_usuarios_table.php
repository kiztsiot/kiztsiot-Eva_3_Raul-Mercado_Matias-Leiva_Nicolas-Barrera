<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabla "usuarios"
     * Campos requeridos: Id, Nombre, Correo (identificador único), Clave (cifrada)
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Id
            $table->string('nombre');
            $table->string('correo')->unique(); // Identificador único
            $table->string('clave'); // Se guarda cifrada (hash), nunca en texto plano
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
