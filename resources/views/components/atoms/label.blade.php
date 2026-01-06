@props(['for'])

<label for="{{ $for }}" class="label">
    <span class="label-text font-semibold">
        {{ $slot }}
    </span>
</label>
