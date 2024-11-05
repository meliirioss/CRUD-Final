<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $table = 'ordenes';
    protected $fillable = [
        'equipo_trabajo_id',
        'solicitud_id'
    ];

    public function equipoTrabajo()
    {
        return $this->belongsTo(EquipoTrabajo::class);
    }

    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class);
    }
}
