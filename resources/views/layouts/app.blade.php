<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinical Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.4.0/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.0/dist/flowbite.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body class="bg-gray-100">
    <div class="flex">
        @include('layouts.sidebar')
        <div class="flex-grow">
            @include('layouts.header')
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
