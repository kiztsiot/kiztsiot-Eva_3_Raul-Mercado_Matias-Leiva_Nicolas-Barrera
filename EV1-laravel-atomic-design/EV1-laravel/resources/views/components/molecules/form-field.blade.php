@props(['label', 'name', 'type' => 'text'])
<div class="molecule-field">
    <x-atoms.label :for="$name">{{ $label }}</x-atoms.label>
    <x-atoms.input :type="$type" :name="$name" />
</div>
