@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Crear Nueva Traducción</h1>

    <form action="{{ route('admin.core.translations.store') }}" method="POST">
        @csrf
        <div>
            <label for="key">Clave:</label>
            <input type="text" id="key" name="key" required>
        </div>
        <div>
            <label for="locale">Idioma:</label>
            <input type="text" id="locale" name="locale" required>
        </div>
        <div>
            <label for="value">Valor:</label>
            <textarea id="value" name="value" rows="5" cols="50"></textarea>
        </div>
        <button type="submit">Guardar Traducción</button>
    </form>

    <a href="{{ route('admin.core.translations.index') }}">Volver a Traducciones</a>
@endsection