@extends('admin.layouts.app')

@section('title')
    Create New Category
@endsection


@section('content')
    <div class="row">
        <div class="form-wrapper">
            <form action="{{ route('category-store') }}" method="POST" enctype="multipart/form-data" class="create-form">
                @csrf
                @method('Post')
                <div class="form-input">
                    <label for="name">Category Name</label>
                    <div class="input">
                        <input type="text" name="name" id="name" value="{{ old('name') }}">
                        <span>
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>

                <div class="form-input">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
                </div>

                <div class="form-btn">
                    <input type="submit" value="Create New Products" id="add-btn" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection
