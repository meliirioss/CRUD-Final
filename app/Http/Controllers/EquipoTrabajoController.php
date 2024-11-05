<?php

namespace App\Http\Controllers;

use App\Models\EquipoTrabajo;
use App\Models\Empleado; // Asegúrate de importar el modelo Empleado
use App\Models\Vehiculo; // Asegúrate de importar el modelo Vehiculo
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EquipoTrabajoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EquipoTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        // Cargar las relaciones con los empleados y vehículo
        $equipoTrabajos = EquipoTrabajo::with(['empleado1', 'empleado2', 'vehiculo'])->paginate(5);
    
        return view('equipo-trabajo.index', compact('equipoTrabajos'))
            ->with('i', ($request->input('page', 1) - 1) * $equipoTrabajos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $equipoTrabajo = new EquipoTrabajo();
        $empleados = Empleado::all(); // Obtener todos los empleados
        $vehiculos = Vehiculo::all(); // Obtener todos los vehículos

        return view('equipo-trabajo.create', compact('equipoTrabajo', 'empleados', 'vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipoTrabajoRequest $request): RedirectResponse
    {
        // Crear el equipo de trabajo utilizando los datos validados
        EquipoTrabajo::create($request->validated());

        return Redirect::route('equipo-trabajos.index')
            ->with('success', 'Equipo de trabajo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $equipoTrabajo = EquipoTrabajo::find($id);

        return view('equipo-trabajo.show', compact('equipoTrabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $equipoTrabajo = EquipoTrabajo::find($id);
        $empleados = Empleado::all(); // Obtener todos los empleados
        $vehiculos = Vehiculo::all(); // Obtener todos los vehículos

        return view('equipo-trabajo.edit', compact('equipoTrabajo', 'empleados', 'vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipoTrabajoRequest $request, EquipoTrabajo $equipoTrabajo): RedirectResponse
    {
        // Actualizar el equipo de trabajo utilizando los datos validados
        $equipoTrabajo->update($request->validated());

        return Redirect::route('equipo-trabajos.index')
            ->with('success', 'Equipo de trabajo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        EquipoTrabajo::find($id)->delete();

        return Redirect::route('equipo-trabajos.index')
            ->with('success', 'Equipo de trabajo eliminado exitosamente.');
    }
}
