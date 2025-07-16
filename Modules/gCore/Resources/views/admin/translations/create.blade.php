@extends('gcore::layouts.master')

@section('content')
    <h1>Crear Nueva Traducción</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.core.translations.store') }}" method="POST">
        @csrf
        <label for="locale">Locale:</label><br>
        <input type="text" id="locale" name="locale" value="{{ old('locale') }}"><br><br>

        <label for="group">Grupo:</label><br>
        <input type="text" id="group" name="group" value="{{ old('group') }}"><br><br>

        <label for="key">Clave:</label><br>
        <input type="text" id="key" name="key" value="{{ old('key') }}"><br><br>

        <label for="value">Valor:</label><br>
        <textarea id="value" name="value">{{ old('value') }}</textarea><br><br>

        <button type="submit">Guardar</button>
    </form>
@endsection
