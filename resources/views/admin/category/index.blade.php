@extends('admin.layouts.app')
@section('title')
    Categories
@endsection
@section('main-title')
    Categories
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
                <a href="{{ route('category-create') }}"> <button class="btn btn-lg btn-primary">Create New
                        Category</button></a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="btns">
                                    <a href="{{ route('category-show', $category->id) }}"> <button
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
