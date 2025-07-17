<?php

namespace Modules\GCore\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\GCore\Models\CssTheme;

class CssThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cssThemes = CssTheme::all();
        return view('gcore::admin.settings.css-themes.index', compact('cssThemes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gcore::admin.settings.css-themes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Lógica para guardar el tema CSS
        return redirect()->route('admin.core.css-themes.index')->with('success', 'Tema CSS creado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('gcore::admin.settings.css-themes.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Lógica para actualizar el tema CSS
        return redirect()->route('admin.core.css-themes.index')->with('success', 'Tema CSS actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Lógica para eliminar el tema CSS
        return redirect()->route('admin.core.css-themes.index')->with('success', 'Tema CSS eliminado exitosamente.');
    }
}