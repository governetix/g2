@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Editar Traducción</h1>

    <form action="{{ route('admin.core.translations.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="key">Clave:</label>
            <input type="text" id="key" name="key" value="{{ $id }}" required> {{-- Placeholder for actual data --}}
        </div>
        <div>
            <label for="locale">Idioma:</label>
            <input type="text" id="locale" name="locale" value="{{ $id }}" required> {{-- Placeholder for actual data --}}
        </div>
        <div>
            <label for="value">Valor:</label>
            <textarea id="value" name="value" rows="5" cols="50">{{-- Placeholder for actual data --}}</textarea>
        </div>
        <button type="submit">Actualizar Traducción</button>
    </form>

    <a href="{{ route('admin.core.translations.index') }}">Volver a Traducciones</a>
@endsection