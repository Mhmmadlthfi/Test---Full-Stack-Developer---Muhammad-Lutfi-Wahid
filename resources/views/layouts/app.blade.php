<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Product CRUD')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-200 min-h-screen">

    {{-- Header --}}
    <div class="navbar bg-base-100 shadow">
        <div class="flex-1 px-2 text-xl font-semibold">
            Simple CRUD - Mini challenge
        </div>
    </div>
    {{-- / Header --}}

    {{-- Content --}}
    <main class="p-6">

        {{-- Alert --}}
        @if (session('success'))
            <div class="alert alert-success mb-4 flex justify-between items-center">
                <span>{{ session('success') }}</span>

                <button
                    type="button"
                    class="btn btn-sm btn-ghost"
                    onclick="this.parentElement.remove()"
                    aria-label="Close"
                >
                    ✕
                </button>
            </div>
        @endif

        @yield('content')
    </main>
    {{-- Content --}}

</body>
</html>
