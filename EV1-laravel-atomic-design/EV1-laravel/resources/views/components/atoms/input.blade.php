@props(['type' => 'text', 'name', 'id' => null, 'required' => true])
<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $id ?? $name }}"
    {{ $required ? 'required' : '' }}
    {{ $attributes->merge(['class' => 'atom-input']) }}
>
