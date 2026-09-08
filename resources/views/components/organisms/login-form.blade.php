@props(['error' => null, 'errors' => null])

<div class="flex items-center justify-center min-h-[80vh] px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 p-8 space-y-6">
        
        <!-- Encabezado -->
        <div class="text-center space-y-2">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Iniciar Sesión</h2>
            <p class="text-sm text-gray-500">Bienvenido de nuevo a Tech Solutions</p>
        </div>

        <!-- Alertas de Error Global -->
        @if($error)
            <x-atoms.alert variant="error">{{ $error }}</x-atoms.alert>
        @endif

        <!-- Lista de Errores de Validación -->
        <x-molecules.error-list :errors="$errors ?? null" />

        <!-- Formulario -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            
            <x-molecules.form-field label="Correo" name="correo" type="email" />
            
            <x-molecules.form-field label="Clave" name="clave" type="password" />
            
            <div class="pt-2">
                <x-atoms.button class="w-full justify-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg shadow-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Ingresar
                </x-atoms.button>
            </div>
        </form>

        <!-- Enlace de Registro -->
        <div class="text-center pt-2 border-t border-gray-100">
            <x-molecules.auth-link question="¿No tienes cuenta?" linkText="Regístrate" route="register" />
        </div>

    </div>
</div>