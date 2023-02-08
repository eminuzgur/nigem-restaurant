@extends('admin.layouts.app')

@section('title')
    Categories
@endsection

@section('content')
    <div class="row">
        <div class="table-wrapper">
            <div class="crud-table-header">
                <div class="table-name">Categories</div>
                <div class="create-new-btn">
                    <a href="{{ route('category-create') }}">
                        <button class="btn btn-lg btn-primary">Create New Category</button>
                    </a>
                </div>
            </div>
            <table class="crud-table">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td> {{ asset('st') }} {{ $category->name }}</td>
                            <td>
                                <div class="btns">
                                    <a href=""> <button class="btn btn-primary ">Show</button></a>
                                    <a href="{{ route('category-edit', $category->id) }}"> <button
                                            class="btn btn-success ">Edit</button></a>
                                    <form action="{{ route('category-destroy', $category->id) }}"
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
