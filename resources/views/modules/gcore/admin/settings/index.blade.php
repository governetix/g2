@extends('gcore::admin.layouts.master')

@section('content')
    <h1>Gestión de Configuraciones</h1>

    <a href="{{ route('admin.core.settings.create') }}">Crear Nueva Configuración</a>

    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($settings as $setting)
                <tr>
                    <td>{{ $setting->key }}</td>
                    <td>{{ $setting->value }}</td>
                    <td>
                        <a href="{{ route('admin.core.settings.edit', $setting->id) }}">Editar</a>
                        <form action="{{ route('admin.core.settings.destroy', $setting->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
            <tr>
                <td colspan="3">No hay configuraciones disponibles.</td>
            </tr>
        </tbody>
    </table>
@endsection