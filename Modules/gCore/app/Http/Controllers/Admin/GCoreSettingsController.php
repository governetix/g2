<?php

namespace Modules\GCore\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GCoreSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gcore::admin.settings.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gcore::admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Lógica para guardar la configuración
        return redirect()->route('admin.core.settings.index')->with('success', 'Configuración creada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('gcore::admin.settings.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Lógica para actualizar la configuración
        return redirect()->route('admin.core.settings.index')->with('success', 'Configuración actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Lógica para eliminar la configuración
        return redirect()->route('admin.core.settings.index')->with('success', 'Configuración eliminada exitosamente.');
    }

    /**
     * Display the visual settings page.
     */
    public function visual()
    {
        return view('gcore::admin.style.visual');
    }

    /**
     * Display the format settings page.
     */
    public function format()
    {
        return view('gcore::admin.style.format');
    }

    /**
     * Display the form settings page.
     */
    public function form()
    {
        // Asegurarse de que la variable $errors esté siempre definida para el showroom
        $errors = new \Illuminate\Support\ViewErrorBag();
        return view('gcore::admin.style.form', compact('errors'));
    }

    /**
     * Display the table settings page.
     */
    public function table()
    {
        return view('gcore::admin.style.table');
    }

    /**
     * Display the charts settings page.
     */
    public function charts()
    {
        return view('gcore::admin.style.charts');
    }

    /**
     * Display the maps settings page.
     */
    public function maps()
    {
        return view('gcore::admin.style.maps');
    }
}