@extends('admin.layouts.app')

@section('title')
    Edit Category
@endsection

@section('content')
    <div class="row">
        <div class="form-wrapper">
            <form action="{{ route('category-update', $category->id) }}" method="POST" class="create-form">
                @csrf
                @method('PUT')
                <div class="form-input">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" value="{{ $category->name }}">
                </div>
                <div class="form-btn">
                    <input type="submit" value="Update Category" id="add-btn" class="btn btn-primary">
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
