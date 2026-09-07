@props(['href'])
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'atom-link']) }}>
    {{ $slot }}
</a>
