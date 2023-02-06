@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Categories</h2>
                    </div>
                    <div class="card-body">
                        <div class="teble-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ url('api/categories/' . $category->id) }}"
                                                    title="View Category"><button class="btn btn-info"><i class="fa fa-eye"
                                                            aria-hidden="true"></i>View</button></a>
                                                <a href="" title="Edit Category"><button class="btn btn-primary"><i
                                                            class="fa fa-eye" aria-hidden="true"></i>Edit</button></a>
                                                <form method="POST" action="{{ route('category-delete', $category->id) }}"
                                                    style="display:inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Student" onclick="return"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="new-category">
                            <div class="card" style="margin:20px;">
                                <div class="card-header">Create New Category</div>
                                <div class="card-body">
                                    <form action="{{ url('api/categories') }}" method="post">
                                        @csrf
                                        @method('POST')
                                        <label>Name</label></br>
                                        <input type="text" name="name" id="name" class="form-control"></br>
                                        <input type="submit" value="Save" class="btn btn-success"></br>
                                    </form>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        let btn = document.getElementClassName('new-btn');
        alert('Hello')
        btn.addEventListener('click', () => {
            document.getElementClassName('new-category').classList.toogle('active');
        });
    </script>
@endsection
