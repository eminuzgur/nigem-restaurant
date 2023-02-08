@extends('admin.layouts.app')

@section('title')
    Update Product
@endsection


@section('content')
    <div class="row">
        <div class="form-wrapper">
            <form action="{{ route('product-update', $product->id) }}" method="POST" class="create-form">
                @csrf
                @method('PUT')
                <div class="form-input">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name" value="{{ $product->name }}">
                </div>
                <div class="form-input">
                    <label for="category_id">Categories</label>
                    <select name="category_id" id="category" class="form-select" aria-label="Default select example">
                        @foreach ($categories as $category)
                            @if ($product->category->id == $category->id)
                                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                @continue
                            @endif
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-input">
                    <label for="discount">Discount</label>
                    <input type="text" name="discount" id="discount" value="{{ $product->discount }}">
                </div>
                <div class="form-input">
                    <label for="unit_price">Unit Price</label>
                    <input type="text" name="unit_price" id="unit_price" value="{{ $product->unit_price }}">
                </div>
                <div class="form-btn">
                    <input type="submit" value="Update Products" id="add-btn" class="btn btn-primary">
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
