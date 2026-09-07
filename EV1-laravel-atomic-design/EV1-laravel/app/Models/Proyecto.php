<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'estado',
        'responsable',
        'monto',
        'created_by', // Id del usuario que crea el proyecto
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'monto' => 'decimal:2',
    ];

    /**
     * Relación: el proyecto pertenece a un usuario (quien lo creó)
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'created_by');
    }
}
