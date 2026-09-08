@props(['type' => 'text', 'name', 'id' => null, 'required' => true])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $id ?? $name }}"
    {{ $required ? 'required' : '' }}
    {{ $attributes->merge(['class' => 'w-full px-4 py-2.5 text-sm bg-white border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200']) }}
>