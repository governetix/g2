<!-- Modules/gCore/Resources/views/admin/settings/feature-flags/create.blade.php -->

@extends('gcore::layouts.master')

@section('content')
    <h1>Crear Nuevo Feature Flag</h1>

    <form action="{{ route('admin.core.feature-flags.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="is_enabled">Habilitado:</label>
            <input type="checkbox" id="is_enabled" name="is_enabled" value="1" {{ old('is_enabled') ? 'checked' : '' }}>
            @error('is_enabled')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Guardar Feature Flag</button>
    </form>

    <a href="{{ route('admin.core.settings.feature-flags.index') }}">Volver a Feature Flags</a>
@endsection
