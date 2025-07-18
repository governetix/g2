@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Editar Configuración</h1>

    <form action="{{ route('admin.core.settings.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="key">Clave:</label>
            <input type="text" id="key" name="key" value="{{ $id }}" required> {{-- Placeholder for actual data --}}
        </div>
        <div>
            <label for="value">Valor:</label>
            <textarea id="value" name="value" rows="5" cols="50">{{-- Placeholder for actual data --}}</textarea>
        </div>
        <button type="submit">Actualizar Configuración</button>
    </form>

    <a href="{{ route('admin.core.settings.index') }}">Volver a Configuraciones</a>
@endsection