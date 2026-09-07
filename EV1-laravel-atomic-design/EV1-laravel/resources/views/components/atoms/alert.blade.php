@props(['variant' => 'error'])
<div {{ $attributes->merge(['class' => "atom-alert atom-alert--{$variant}"]) }}>
    {{ $slot }}
</div>
