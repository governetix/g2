@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Gestión de Feature Flags</h1>

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
            {{-- @foreach($featureFlags as $flag)
                <tr>
                    <td>{{ $flag->name }}</td>
                    <td>{{ $flag->is_enabled ? 'Sí' : 'No' }}</td>
                    <td>{{ $flag->description }}</td>
                    <td>
                        <form action="{{ route('admin.core.feature-flags.update', $flag->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit">{{ $flag->is_enabled ? 'Deshabilitar' : 'Habilitar' }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
            <tr>
                <td colspan="4">No hay feature flags disponibles.</td>
            </tr>
        </tbody>
    </table>
@endsection
