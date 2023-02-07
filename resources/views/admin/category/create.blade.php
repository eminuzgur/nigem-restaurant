@extends('admin.layouts.app')

@section('title')
    Create New Category
@endsection

@section('main-title')
    Create New Category
@endsection

@section('css')
    <style>
        .card form {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        form .form-left {
            display: flex;
            column-gap: 2rem;
        }

        form .form-right #add-btn {
            height: 2rem;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <form action="{{ route('category-store') }}" method="POST">
            @csrf
            @method('Post')
            <div class="form-left">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-right">
                <input type="submit" value="Create New Category" id="add-btn">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
    </div>
@endsection
