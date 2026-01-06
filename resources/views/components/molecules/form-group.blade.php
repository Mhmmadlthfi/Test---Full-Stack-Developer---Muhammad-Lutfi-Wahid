@props([
    'label',
    'name',
    'type' => 'text',
    'value' => ''
])

<div class="mb-4">
    <x-atoms.label for="{{ $name }}">
        {{ $label }}
    </x-atoms.label>

    <x-atoms.input
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $value }}"
    />

    @error($name)
        <p class="text-error text-sm mt-1">
            {{ $message }}
        </p>
    @enderror
</div>
