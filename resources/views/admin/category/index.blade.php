@extends('admin.layouts.app')

@section('title')
    Categories
@endsection

@section('css')
    <style>
        .category-image {
            margin-top: 1rem;
            margin-right: 2rem;
            width: 4rem;
            height: 4rem;
            border-radius: 3rem;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="table-wrapper">
            <div class="crud-table-header">
                <div class="table-name">Categories</div>
                <x-new-category-popup />
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
                            <td>
                                <img class="category-image" src="{{ asset('images/categories/' . $category->image) }}"
                                    alt="Deneme">
                                {{ $category->name }}
                            </td>
                            <td>
                                <div class="btns">
                                    <a href=""> <button class="btn btn-primary ">Show</button></a>
                                    <a href="{{ route('category-edit', $category->id) }}"> <button
                                            class="btn btn-success ">Edit</button></a>
                                    <form action="{{ route('category-destroy', $category->id) }}"
                                        method="POST"style="display: inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger delete" type="submit">Delete</button>
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
