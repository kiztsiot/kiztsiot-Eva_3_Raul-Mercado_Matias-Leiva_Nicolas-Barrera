@props(['variant' => 'error'])

@php
    $classes = match ($variant) {
        'success' => 'bg-green-50 border-green-200 text-green-800',
        'error'   => 'bg-red-50 border-red-200 text-red-800',
        default   => 'bg-blue-50 border-blue-200 text-blue-800',
    };
@endphp

<div {{ $attributes->merge(['class' => "p-4 rounded-xl border text-sm flex items-start space-x-3 {$classes}"]) }}>
    <div class="flex-1">
        {{ $slot }}
    </div>
</div>