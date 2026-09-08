@props(['question', 'linkText', 'route'])

<div class="text-sm text-center text-gray-500">
    {{ $question }} 
    <x-atoms.link :href="route($route)" class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors ml-1">
        {{ $linkText }}
    </x-atoms.link>
</div>