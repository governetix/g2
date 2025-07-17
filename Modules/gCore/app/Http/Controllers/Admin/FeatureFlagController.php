<?php

namespace Modules\GCore\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureFlagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gcore::admin.settings.feature-flags.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gcore::admin.settings.feature-flags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Lógica para guardar el feature flag
        return redirect()->route('admin.core.settings.feature-flags.index')->with('success', 'Feature Flag creado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('gcore::admin.settings.feature-flags.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Lógica para actualizar el feature flag
        return redirect()->route('admin.core.settings.feature-flags.index')->with('success', 'Feature Flag actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Lógica para eliminar el feature flag
        return redirect()->route('admin.core.settings.feature-flags.index')->with('success', 'Feature Flag eliminado exitosamente.');
    }
}