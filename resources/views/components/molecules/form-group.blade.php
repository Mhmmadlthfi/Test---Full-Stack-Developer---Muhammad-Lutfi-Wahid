@props([
    'label',
    'name',
    'type' => 'text',
    'value' => ''
])

@php
    $hasError = $errors->has($name);
@endphp

<div class="mb-4">
    <x-atoms.label for="{{ $name }}">
        {{ $label }}
    </x-atoms.label>

    <x-atoms.input
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="{{ $hasError ? 'input-error' : '' }}"
    />

    @error($name)
        <p class="text-error text-sm mt-1">
            {{ $message }}
        </p>
    @enderror
</div>
