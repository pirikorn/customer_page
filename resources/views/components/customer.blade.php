<tr>
    <td>{{ $customer['_id']}}</td>
    <td>{{ $customer['firstname'] }} {{ $customer['lastname'] }}</td>
    <td>
        <a href="{{ route('customer.edit.form', ['id' => $customer['_id']]) }}" class="inline-block align-middle pb-1 text-decoration-none text-gray-600">
            @component('components.edit')
            @endcomponent
        </a>
    </td>
</tr>
