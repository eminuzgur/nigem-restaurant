@extends('admin.layouts.app')

@section('title')
    Products
@endsection

@section('main-title')
    Products
@endsection
@section('css')
    <style>
        .container {
            display: flex;
            flex-direction: column;
            row-gap: 2rem
        }

        .row {
            width: 100%;
        }

        .row .btn {
            display: flex;
            justify-content: end
        }

        .btns {
            display: flex;
            justify-content: end;
            column-gap: 1rem;
        }

        table {
            text-align: center;
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="btn">
                <a href="{{ route('product-create') }}"> <button class="btn btn-primary">Create New Product</button></a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Unit Price</th>
                        <th>Discount</th>
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
                                    <button class="btn btn-primary">Edit</button>
                                    <form action="" method="POST"style="display: inline">
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
