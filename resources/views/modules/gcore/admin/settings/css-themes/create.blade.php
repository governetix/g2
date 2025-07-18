@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Crear Nuevo Tema CSS</h1>

    <form action="{{ route('admin.core.css-themes.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="path">Ruta:</label>
            <input type="text" id="path" name="path" required>
        </div>
        <div>
            <label for="is_active">Activo:</label>
            <input type="checkbox" id="is_active" name="is_active" value="1">
        </div>
        <div>
            <label for="colors_json">JSON de Colores:</label>
            <textarea id="colors_json" name="colors_json" rows="10" cols="50"></textarea>
        </div>
        <button type="submit">Guardar Tema CSS</button>
    </form>

    <a href="{{ route('admin.core.css-themes.index') }}">Volver a Temas CSS</a>
@endsection