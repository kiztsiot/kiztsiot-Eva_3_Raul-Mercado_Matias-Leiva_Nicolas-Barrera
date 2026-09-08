@props(['type' => 'submit', 'variant' => 'primary'])

@php
    $baseClasses = "w-full inline-flex justify-center items-center px-4 py-2.5 rounded-xl font-medium text-sm shadow-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2";
    
    $variants = [
        'primary' => "bg-indigo-600 hover:bg-indigo-700 text-white focus:ring-indigo-500",
        'secondary' => "bg-white hover:bg-gray-50 text-gray-700 border border-gray-300 focus:ring-indigo-500",
        'danger' => "bg-red-600 hover:bg-red-700 text-white focus:ring-red-500",
    ];

    $classes = $variants[$variant] ?? $variants['primary'];
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseClasses $classes"]) }}>
    {{ $slot }}
</button>