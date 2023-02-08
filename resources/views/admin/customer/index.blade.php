@extends('admin.layouts.app')

@section('title')
    Customers
@endsection

@section('content')
    <div class="row">
        <div class="table-wrapper">
            <div class="crud-table-header">
                <div class="table-name">Customers</div>
                <div class="create-new-btn">
                    <a href="{{ route('customer-create') }}">
                        <button class="btn btn-lg btn-primary">Create New Customer</button>
                    </a>
                </div>
            </div>
            <table class="crud-table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Adress</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->first_name }}</td>
                            <td>{{ $customer->last_name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>
                                <div class="btns">
                                    <a href=""> <button class="btn btn-primary ">Show</button></a>
                                    <a href="{{ route('customer-edit', $customer->id) }}"> <button
                                            class="btn btn-success ">Edit</button></a>
                                    <form action="{{ route('customer-destroy', $customer->id) }}"
                                        method="POST"style="display: inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
