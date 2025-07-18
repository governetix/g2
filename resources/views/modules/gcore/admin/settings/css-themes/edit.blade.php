@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Editar Tema CSS</h1>

    <form action="{{ route('admin.core.css-themes.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ $id }}" required> {{-- Placeholder for actual data --}}
        </div>
        <div>
            <label for="path">Ruta:</label>
            <input type="text" id="path" name="path" value="{{ $id }}" required> {{-- Placeholder for actual data --}}
        </div>
        <div>
            <label for="is_active">Activo:</label>
            <input type="checkbox" id="is_active" name="is_active" value="1" {{-- checked if active --}}> {{-- Placeholder for actual data --}}
        </div>
        <div>
            <label for="colors_json">JSON de Colores:</label>
            <textarea id="colors_json" name="colors_json" rows="10" cols="50">{{-- Placeholder for actual data --}}</textarea>
        </div>
        <button type="submit">Actualizar Tema CSS</button>
    </form>

    <a href="{{ route('admin.core.css-themes.index') }}">Volver a Temas CSS</a>
@endsection