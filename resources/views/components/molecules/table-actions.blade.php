@props([
    'editRoute' => null,
    'deleteRoute' => null,
    'showRoute' => null,
    'confirmMessage' => 'Are you sure?'
])

@if ($showRoute)
    <a href="{{ $showRoute }}" class="btn btn-sm btn-info">
        View
    </a>
@endif

@if ($editRoute)
    <a href="{{ $editRoute }}" class="btn btn-sm btn-warning">
        Edit
    </a>
@endif

@if ($deleteRoute)
    <form
        action="{{ $deleteRoute }}"
        method="POST"
        class="inline"
        x-data="{ loading: false }"
        x-on:submit="
            if (!confirm('{{ $confirmMessage }}')) {
                $event.preventDefault();
                return;
            }
            loading = true;
        "
    >
        @csrf
        @method('DELETE')

        <button
            type="submit"
            class="btn btn-sm btn-error"
            :disabled="loading"
        >
            <span x-show="!loading">Delete</span>
            <span
                x-show="loading"
                x-cloak
                class="flex items-center gap-1"
            >
                <span class="loading loading-spinner loading-xs"></span>
                Deleting...
            </span>
        </button>
    </form>
@endif