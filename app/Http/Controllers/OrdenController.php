<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\EquipoTrabajo; // Importa el modelo de EquipoTrabajo
use App\Models\Solicitud; // Importa el modelo de Solicitud
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OrdenRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ordenes = Orden::paginate(5);

        return view('orden.index', compact('ordenes'))
            ->with('i', ($request->input('page', 1) - 1) * $ordenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $orden = new Orden();
        $equiposTrabajo = EquipoTrabajo::all(); // Obtén todos los equipos de trabajo
        $solicitudes = Solicitud::all(); // Obtén todas las solicitudes

        return view('orden.create', compact('orden', 'equiposTrabajo', 'solicitudes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrdenRequest $request): RedirectResponse
    {
        Orden::create($request->validated());

        return Redirect::route('ordenes.index')
            ->with('success', 'Orden created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $orden = Orden::find($id);

        return view('orden.show', compact('orden'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $orden = Orden::find($id);
        $equiposTrabajo = EquipoTrabajo::all(); // Obtén todos los equipos de trabajo
        $solicitudes = Solicitud::all(); // Obtén todas las solicitudes

        return view('orden.edit', compact('orden', 'equiposTrabajo', 'solicitudes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrdenRequest $request, Orden $orden): RedirectResponse
    {
        $orden->update($request->validated());

        return Redirect::route('ordenes.index')
            ->with('success', 'Orden updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Orden::find($id)->delete();

        return Redirect::route('ordenes.index')
            ->with('success', 'Orden deleted successfully');
    }
}
