@props(['errors' => null])

<h2>Registro de Usuario</h2>

<x-molecules.error-list :errors="$errors ?? null" />

<form method="POST" action="{{ route('register') }}">
    @csrf
    <x-molecules.form-field label="Nombre" name="nombre" type="text" />
    <x-molecules.form-field label="Correo" name="correo" type="email" />
    <x-molecules.form-field label="Clave" name="clave" type="password" />
    <x-atoms.button>Registrarse</x-atoms.button>
</form>

<x-molecules.auth-link question="¿Ya tienes cuenta?" linkText="Inicia sesión" route="login" />
