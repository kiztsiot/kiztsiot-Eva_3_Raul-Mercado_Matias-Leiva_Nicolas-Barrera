@props(['usuario'])

<h2>¡Registro exitoso!</h2>

<x-molecules.success-message>
    El usuario <strong>{{ $usuario->nombre }}</strong> fue registrado correctamente.
</x-molecules.success-message>

<p><strong>Correo:</strong> {{ $usuario->correo }}</p>

<div class="molecule-link">
    <x-atoms.link :href="route('login')">Ir a Inicio de Sesión</x-atoms.link>
</div>
