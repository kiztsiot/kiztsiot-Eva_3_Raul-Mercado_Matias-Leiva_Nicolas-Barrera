@props(['type' => 'submit', 'variant' => 'primary'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => "atom-btn atom-btn--{$variant}"]) }}>
    {{ $slot }}
</button>
