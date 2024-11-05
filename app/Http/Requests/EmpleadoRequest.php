<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize()
    {
        return true; // Cambia a "true" para permitir el uso de esta solicitud
    }

    /**
     * Obtiene las reglas de validación que se aplican a la solicitud.
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ];
    }
}
