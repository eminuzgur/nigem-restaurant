@extends('admin.layouts.app')

@section('title')
    Products
@endsection

@section('css')
    <style>
        .create-new-btn {
            display: flex;
            justify-content: end;
            align-items: center;
            margin-bottom: 1rem;
            margin-right: 1rem;
        }

        .btns {
            width: 100%;
            display: flex;
            justify-content: end;
            column-gap: 1rem;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="table-wrapper">
            <div class="crud-table-header">
                <div class="table-name">Products</div>
                <div class="create-new-btn">
                    <a href="{{ route('product-create') }}">
                        <button class="btn btn-lg btn-primary">Create New Products</button>
                    </a>
                </div>
            </div>
            <table class="crud-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Unit Price</th>
                        <th>Discount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->unit_price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>
                                <div class="btns">
                                    <a href=""> <button class="btn btn-primary ">Show</button></a>
                                    <a href="{{ route('product-edit', $product->id) }}"> <button
                                            class="btn btn-success ">Edit</button></a>
                                    <form action="{{ route('product-destroy', $product->id) }}"
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
    </div>
@endsection
