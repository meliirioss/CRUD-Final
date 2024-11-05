<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoTrabajo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'empleado_1_id',
        'empleado_2_id',
        'vehiculo_id',
    ];

    public function empleado1()
    {
        return $this->belongsTo(Empleado::class, 'empleado_1_id');
    }

    // Relación con el segundo empleado
    public function empleado2()
    {
        return $this->belongsTo(Empleado::class, 'empleado_2_id');
    }

    // Relación con el vehículo
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
