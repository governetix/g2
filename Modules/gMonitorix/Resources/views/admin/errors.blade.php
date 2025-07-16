@extends('gmonitorix::layouts.master')

@section('content')
    <h1>Reporte de Errores</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Mensaje</th>
                <th>Archivo</th>
                <th>Línea</th>
                <th>URL</th>
                <th>IP</th>
                <th>User ID</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($errors as $error)
                <tr>
                    <td>{{ $error->id }}</td>
                    <td>{{ $error->type }}</td>
                    <td>{{ $error->message }}</td>
                    <td>{{ $error->file }}</td>
                    <td>{{ $error->line }}</td>
                    <td>{{ $error->url }}</td>
                    <td>{{ $error->ip_address }}</td>
                    <td>{{ $error->user_id }}</td>
                    <td>{{ $error->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $errors->links() }}
@endsection
