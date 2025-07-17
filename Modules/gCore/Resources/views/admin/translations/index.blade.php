@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Gestión de Traducciones</h1>

    <a href="{{ route('admin.core.translations.create') }}">Crear Nueva Traducción</a>

    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Idioma</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($translations as $translation)
                <tr>
                    <td>{{ $translation->key }}</td>
                    <td>{{ $translation->locale }}</td>
                    <td>{{ $translation->value }}</td>
                    <td>
                        <a href="{{ route('admin.core.translations.edit', $translation->id) }}">Editar</a>
                        <form action="{{ route('admin.core.translations.destroy', $translation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
            <tr>
                <td colspan="4">No hay traducciones disponibles.</td>
            </tr>
        </tbody>
    </table>
@endsection