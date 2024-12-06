<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinical Management System</title>
    <link href="{{ ('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
         @include('layouts.navbar') 
        <div class="flex flex-1">
            @include('layouts.sidebar')
            <main class="flex-1 p-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ ('js/app.js') }}"></script>
</body>
</html>
