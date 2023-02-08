@extends('admin.layouts.app')

@section('title')
    Create New Product
@endsection


@section('content')
    <div class="row">
        <div class="form-wrapper">
            <form action="{{ route('product-store') }}" method="POST" class="create-form">
                @csrf
                @method('Post')
                <div class="form-input">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-input">
                    <label for="category_id">Categories</label>
                    <select name="category_id" id="category" class="form-select" aria-label="Default select example">
                        <option selected>Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-input">
                    <label for="discount">Discount</label>
                    <input type="text" name="discount" id="discount">
                </div>
                <div class="form-input">
                    <label for="unit_price">Unit Price</label>
                    <input type="text" name="unit_price" id="unit_price">
                </div>
                <div class="form-btn">
                    <input type="submit" value="Create New Products" id="add-btn" class="btn btn-primary">
                </div>
                <div class="form-alert">
                    @error('name')
                        <div class="alert">{{ $message }}</div>
                    @enderror
                </div>
            </form>
        </div>
    </div>
@endsection
