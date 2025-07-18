<!-- Modules/gCore/Resources/views/admin/settings/css-themes/index.blade.php -->

@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Gestión de Temas CSS</h1>

    <a href="{{ route('admin.core.css-themes.create') }}">Crear Nuevo Tema CSS</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ruta</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cssThemes as $theme)
                <tr>
                    <td>{{ $theme->name }}</td>
                    <td>{{ $theme->path }}</td>
                    <td>{{ $theme->is_active ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('admin.core.css-themes.edit', $theme->id) }}">Editar</a>
                        <form action="{{ route('admin.core.css-themes.destroy', $theme->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
