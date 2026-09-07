@props(['errors' => null])
@if($errors)
    <x-atoms.alert variant="error">
        <ul style="margin:0; padding-left:18px;">
            @foreach($errors->all() ?? $errors as $err)
                <li>{{ is_array($err) ? $err[0] : $err }}</li>
            @endforeach
        </ul>
    </x-atoms.alert>
@endif
