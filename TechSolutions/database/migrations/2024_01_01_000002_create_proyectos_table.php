<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabla "proyectos" (actualizada)
     * Campos: Id, Nombre, Fecha de Inicio, Estado, Responsable, Monto, created_by (FK -> usuarios.id)
     */
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id(); // Id
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->string('estado')->default('pendiente'); // ej: pendiente, en_progreso, finalizado
            $table->string('responsable');
            $table->decimal('monto', 12, 2);

            // created_by: Id del usuario que creó el proyecto
            $table->foreignId('created_by')
                  ->constrained('usuarios')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
