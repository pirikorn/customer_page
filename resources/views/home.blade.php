@extends('layouts.layout')
@section('content')
    <script src="{{ asset('js/home.js') }}"></script>
    <div class="container">
        <div class="row" style="margin-top:20px">
            <table id="customerTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th style="width:10%" class="text-center">NO</th>
                        <th style="width:10%" class="text-center">ID</th>
                        <th class="text-center">Firstname</th>
                        <th class="text-center">Lastname</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th style="width:5%" class="text-center">Edit</th>
                        <th style="width:5%" class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $index => $customer)
                    <tr>
                        <td class="text-center">{{ $index+1 }}</td>
                        <td class="text-center">{{ $customer['number'] }}</td>
                        <td>{{ $customer['firstname'] }}</td>
                        <td>{{ $customer['lastname'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                        <td>
                            <a href="{{ route('customer.edit.form', ['id' => $customer['_id']]) }}" class="btn btn-primary">
                                แก้ไข
                            </a>
                        </td>
                        <td>
                            <form method="GET" action="{{ route('customer.delete', ['id' => $customer['_id']]) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'>ลบ</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


