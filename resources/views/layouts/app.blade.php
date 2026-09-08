<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tech Solutions')</title>
    
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="min-h-full font-sans antialiased text-gray-900 bg-gray-50 flex flex-col">
    
    <!-- Contenido principal que toma todo el ancho -->
    <main class="flex-grow w-full">
        @yield('content')
    </main>

</body>
</html>
