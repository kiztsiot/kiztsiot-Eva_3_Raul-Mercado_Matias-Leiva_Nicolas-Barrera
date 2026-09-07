@props(['for' => null])
<label @if($for) for="{{ $for }}" @endif {{ $attributes->merge(['class' => 'atom-label']) }}>
    {{ $slot }}
</label>
