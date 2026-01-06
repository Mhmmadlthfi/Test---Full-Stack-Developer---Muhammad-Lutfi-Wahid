@props(['products'])

<div class="card bg-base-100 shadow">
    <div class="card-body">

        <div class="flex justify-between items-center mb-4">
            <h2 class="card-title">Product List</h2>

            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
                + Add Product
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Qty</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->amount) }}</td>
                            <td>{{ $product->qty }}</td>
                            <td class="text-right space-x-2">
                                <x-molecules.table-actions
                                    :edit-route="route('products.edit', $product)"
                                    :delete-route="route('products.destroy', $product)"
                                    confirm-message="Delete this product?"
                                />
                            </td>
                        </tr>
                    @empty
                        <x-molecules.table-empty :colspan="5" />
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
</div>
