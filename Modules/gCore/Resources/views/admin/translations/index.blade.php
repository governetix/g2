@extends('gcore::layouts.master')

@section('content')
    <h1>Gestión de Traducciones</h1>

    <a href="{{ route('admin.core.translations.create') }}">Crear Nueva Traducción</a>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Locale</th>
                <th>Grupo</th>
                <th>Clave</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($translations as $translation)
                <tr>
                    <td>{{ $translation->id }}</td>
                    <td>{{ $translation->locale }}</td>
                    <td>{{ $translation->group }}</td>
                    <td>{{ $translation->key }}</td>
                    <td>{{ $translation->value }}</td>
                    <td>
                        <a href="{{ route('admin.core.translations.edit', $translation->id) }}">Editar</a>
                        <form action="{{ route('admin.core.translations.destroy', $translation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
