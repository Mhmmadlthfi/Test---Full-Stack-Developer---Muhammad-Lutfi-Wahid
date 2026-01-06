@props([
    'type' => 'submit',
    'variant' => 'primary',
    'loadingText' => 'Saving...',
])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => "btn btn-{$variant}",
    ]) }}
    x-data="{ loading: false }"
    x-on:click="
        if ({{ $type === 'submit' ? 'true' : 'false' }}) {
            loading = true;
            $el.form?.submit();
        }
    "
    x-bind:disabled="loading"
>
    <span x-show="!loading">
        {{ $slot }}
    </span>

    <span x-show="loading" class="flex items-center gap-2">
        <span class="loading loading-spinner loading-sm"></span>
        {{ $loadingText }}
    </span>
</button>
