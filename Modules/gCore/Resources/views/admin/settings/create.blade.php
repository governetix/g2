@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Crear Nueva Configuración</h1>

    <form action="{{ route('admin.core.settings.store') }}" method="POST">
        @csrf
        <div>
            <label for="key">Clave:</label>
            <input type="text" id="key" name="key" required>
        </div>
        <div>
            <label for="value">Valor:</label>
            <textarea id="value" name="value" rows="5" cols="50"></textarea>
        </div>
        <button type="submit">Guardar Configuración</button>
    </form>

    <a href="{{ route('admin.core.settings.index') }}">Volver a Configuraciones</a>
@endsection