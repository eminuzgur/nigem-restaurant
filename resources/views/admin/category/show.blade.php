@extends('admin.layouts.app')

@section('main-title')
    {{ $category->name }}
@endsection

@section('content')
    <div class="card">
        <form action="{{ route('category-update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}">
            <input type="submit" value="update">
        </form>
    </div>
    
@endsection
