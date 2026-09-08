@props(['usuario'])

<div class="flex items-center justify-center min-h-[80vh] px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 p-8 space-y-6">
        
        <!-- Encabezado con Icono -->
        <div class="text-center space-y-2">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-indigo-100 text-indigo-600 mb-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">¡Registro exitoso!</h2>
            <p class="text-sm text-gray-500">Tu cuenta ha sido creada correctamente.</p>
        </div>

        <!-- Mensaje de Éxito -->
        <x-molecules.success-message>
            El usuario <strong class="font-semibold text-gray-900">{{ $usuario->nombre }}</strong> fue registrado correctamente.
        </x-molecules.success-message>

        <!-- Información del Usuario -->
        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100 space-y-2 text-sm">
            <div class="flex justify-between">
                <span class="text-gray-500 font-medium">Correo:</span>
                <span class="text-gray-900 font-semibold">{{ $usuario->correo }}</span>
            </div>
        </div>

        <!-- Enlace de Acción -->
        <div class="pt-2 text-center">
            <x-atoms.link :href="route('login')" class="w-full inline-flex justify-center items-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-4 rounded-lg shadow-sm transition-all duration-200">
                Ir a Inicio de Sesión
            </x-atoms.link>
        </div>

    </div>
</div>