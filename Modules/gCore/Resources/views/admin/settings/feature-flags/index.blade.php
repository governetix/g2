<!-- Modules/gCore/Resources/views/admin/settings/feature-flags/index.blade.php -->

@extends('gcore::layouts.master')

@section('content')
    <h1>Gestión de Feature Flags</h1>

    <a href="{{ route('admin.core.feature-flags.create') }}">Crear Nuevo Feature Flag</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Habilitado</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($featureFlags as $flag)
                <tr>
                    <td>{{ $flag->name }}</td>
                    <td>{{ $flag->is_enabled ? 'Sí' : 'No' }}</td>
                    <td>{{ $flag->description }}</td>
                    <td>
                        <a href="{{ route('admin.core.feature-flags.edit', $flag->id) }}">Editar</a>
                        <form action="{{ route('admin.core.settings.feature-flags.destroy', $flag->id) }}" method="POST" style="display:inline;">
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
