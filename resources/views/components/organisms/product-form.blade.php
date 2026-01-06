@props([
    'action',
    'method' => 'POST',
    'product' => null
])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <h2 class="card-title mb-4">
            {{ $product ? 'Edit Product' : 'Create Product' }}
        </h2>

        <form action="{{ $action }}" method="POST">
            @csrf
            @if ($method !== 'POST')
                @method($method)
            @endif

            <x-molecules.form-group
                label="Product Name"
                name="name"
                :value="$product->name ?? ''"
            />

            <x-molecules.form-group
                label="Amount"
                name="amount"
                type="number"
                :value="$product->amount ?? ''"
            />

            <x-molecules.form-group
                label="Quantity"
                name="qty"
                type="number"
                :value="$product->qty ?? ''"
            />

            <div class="flex justify-end gap-2">
                <a href="{{ route('products.index') }}" class="btn btn-ghost">
                    Cancel
                </a>

                <x-atoms.button>
                    Save
                </x-atoms.button>
            </div>
        </form>

    </div>
</div>
