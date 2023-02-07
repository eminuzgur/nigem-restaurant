@extends('admin.layouts.app')

@section('title')
    Create New Product
@endsection

@section('main-title')
    Create New Product
@endsection

@section('css')
    <style>
        .card form {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        form .form-left {

            column-gap: 2rem;
        }

        form .form-right #add-btn {
            height: 2rem;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <form action="{{ route('product-store') }}" method="POST">
            @csrf
            @method('Post')
            <div class="form-left">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name">
                <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                    <option selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <label for="discount">Discount</label>
                <input type="text" name="discount" id="discount">

                <label for="unit_price">Unit Price</label>
                <input type="text" name="unit_price" id="unit_price">
            </div>
            <div class="form-right">
                <input type="submit" value="Create New Products" id="add-btn">
            </div>

            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
    </div>
@endsection
