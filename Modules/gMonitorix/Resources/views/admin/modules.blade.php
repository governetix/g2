@extends('gmonitorix::layouts.master')

@section('content')
    <h1>Estado de Módulos</h1>

    <p>Esta sección mostrará el estado de los módulos.</p>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre del Módulo</th>
                <th>Estado</th>
                <th>Versión</th>
            </tr>
        </thead>
        <tbody>
            @forelse($modules as $module)
                <tr>
                    <td>{{ $module['name'] }}</td>
                    <td>{{ $module['status'] ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $module['version'] ?? 'N/A' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No se encontraron módulos.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
