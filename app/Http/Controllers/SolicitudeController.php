<?php

namespace App\Http\Controllers;

use App\Models\Solicitude;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SolicitudeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $solicitudes = Solicitude::paginate(5);

        return view('solicitude.index', compact('solicitudes'))
            ->with('i', ($request->input('page', 1) - 1) * $solicitudes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $solicitude = new Solicitude();

        return view('solicitude.create', compact('solicitude'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SolicitudeRequest $request): RedirectResponse
    {
        Solicitude::create($request->validated());

        return Redirect::route('solicitudes.index')
            ->with('success', 'Solicitude created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $solicitude = Solicitude::find($id);

        return view('solicitude.show', compact('solicitude'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $solicitude = Solicitude::find($id);

        return view('solicitude.edit', compact('solicitude'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SolicitudeRequest $request, Solicitude $solicitude): RedirectResponse
    {
        $solicitude->update($request->validated());

        return Redirect::route('solicitudes.index')
            ->with('success', 'Solicitude updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Solicitude::find($id)->delete();

        return Redirect::route('solicitudes.index')
            ->with('success', 'Solicitude deleted successfully');
    }
}
