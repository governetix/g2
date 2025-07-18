<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Governetix Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer" />
    <!-- Google Fonts (Inter) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <!-- Module CSS -->
    <link href="{{ asset('modules/gcore/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('gcore::admin.layouts.sidebar')
        <main>
            @yield('content')
        </main>
    </div>
    
</body>
</html>
