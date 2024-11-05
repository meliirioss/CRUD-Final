<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoTrabajoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'empleado_1_id' => 'required|exists:empleados,id',
            'empleado_2_id' => 'required|exists:empleados,id|different:empleado_1_id',
            'vehiculo_id' => 'required|exists:vehiculos,id',
        ];
    }
}
