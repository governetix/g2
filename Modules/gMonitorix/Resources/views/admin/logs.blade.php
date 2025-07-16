@extends('gmonitorix::layouts.master')

@section('content')
    <h1>Visor de Logs</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nivel</th>
                <th>Mensaje</th>
                <th>Contexto</th>
                <th>Canal</th>
                <th>IP</th>
                <th>User Agent</th>
                <th>User ID</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->id }}</td>
                    <td>{{ $log->level }}</td>
                    <td>{{ $log->message }}</td>
                    <td>{{ json_encode($log->context) }}</td>
                    <td>{{ $log->channel }}</td>
                    <td>{{ $log->remote_addr }}</td>
                    <td>{{ $log->user_agent }}</td>
                    <td>{{ $log->user_id }}</td>
                    <td>{{ $log->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $logs->links() }}
@endsection
