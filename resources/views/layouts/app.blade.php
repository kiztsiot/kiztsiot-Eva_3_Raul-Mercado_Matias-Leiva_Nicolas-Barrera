<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tech Solutions')</title>
    
    <!-- Tailwind CSS -->
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body class="h-full font-sans antialiased text-gray-900 bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h1 class="text-center text-xl font-bold tracking-tight text-indigo-600 mb-2">Tech Solutions</h1>
    </div>

    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-md">
        @yield('content')
    </div>

    <!-- --- Átomos --- -->
    <!-- --- Moléculas --- -->
    <!-- --- Organismos --- -->
</body>
</html>