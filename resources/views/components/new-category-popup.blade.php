<div class="popup-container">
    <label class="btn btn-dark" for="create-popup">Create New Category</label>
    <input type="checkbox" @if ($errors->any()) @checked(true) @endif name="create-popup" id="create-popup">
    <div class="popup">
        <div class="inner">
            <div class="title">
                <h6>Create New Category</h6>
                <label for="create-popup">
                    <i class="fa fa-times"></i>
                </label>
            </div>
            <div class="content">
                <form action="{{ route('category-store') }}" method="POST" enctype="multipart/form-data"
                    class="create-form">
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
    </div>
</div>
