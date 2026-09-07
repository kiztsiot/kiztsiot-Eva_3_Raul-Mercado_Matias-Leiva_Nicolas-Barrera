@props(['usuario', 'token'])

<h2>¡Bienvenido, {{ $usuario->nombre }}!</h2>

<x-molecules.success-message>Inicio de sesión exitoso.</x-molecules.success-message>

<x-atoms.label>Tu token JWT:</x-atoms.label>
<pre>{{ $token }}</pre>

<div class="molecule-link">
    <x-atoms.link :href="route('login')">Volver</x-atoms.link>
</div>
