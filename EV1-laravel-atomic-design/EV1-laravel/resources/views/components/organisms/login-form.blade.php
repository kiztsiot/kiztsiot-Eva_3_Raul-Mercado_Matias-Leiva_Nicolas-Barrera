@props(['error' => null, 'errors' => null])

<h2>Inicio de Sesión</h2>

@if($error)
    <x-atoms.alert variant="error">{{ $error }}</x-atoms.alert>
@endif

<x-molecules.error-list :errors="$errors ?? null" />

<form method="POST" action="{{ route('login') }}">
    @csrf
    <x-molecules.form-field label="Correo" name="correo" type="email" />
    <x-molecules.form-field label="Clave" name="clave" type="password" />
    <x-atoms.button>Ingresar</x-atoms.button>
</form>

<x-molecules.auth-link question="¿No tienes cuenta?" linkText="Regístrate" route="register" />
