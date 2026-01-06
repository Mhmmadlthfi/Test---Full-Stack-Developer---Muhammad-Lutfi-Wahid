@props([
    'colspan',
    'message' => 'No data found'
])

<tr>
    <td colspan="{{ $colspan }}" class="text-center text-gray-500 py-4">
        {{ $message }}
    </td>
</tr>
