@props(['errors' => null])

@if($errors)
    <x-atoms.alert variant="error">
        <ul class="list-disc list-inside space-y-1 text-sm m-0">
            @foreach($errors->all() ?? $errors as $err)
                <li>{{ is_array($err) ? $err[0] : $err }}</li>
            @endforeach
        </ul>
    </x-atoms.alert>
@endif