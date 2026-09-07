@props(['question', 'linkText', 'route'])
<div class="molecule-link">
    {{ $question }} <x-atoms.link :href="route($route)">{{ $linkText }}</x-atoms.link>
</div>
