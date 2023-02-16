<div class="popup-container">
    <label class="btn btn-dark" for="create-popup">Create New Product</label>
    <input type="checkbox" @if ($errors->any()) @checked(true) @endif name="create-popup" id="create-popup">
    <div class="popup">
        <div class="inner">
            <div class="title">
                <h6>Create New Product</h6>
                <label for="create-popup">
                    <i class="fa fa-times"></i>
                </label>
            </div>
            <div class="content">
                <form action="{{ route('product-store') }}" method="POST" class="create-form">
                    @csrf
                    @method('Post')
                    <div class="form-input">
                        <label for="name">Product Name</label>
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
                        <label for="category_id">Categories</label>
                        <div class="input">
                            <select name="category_id" id="category" class="form-select"
                                aria-label="Default select example">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <span>
                                @error('category_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-input">
                        <label for="discount">Discount</label>
                        <div class="input">
                            <input type="text" name="discount" id="discount" value="{{ old('discount') }}">
                            <span>
                                @error('discount')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-input">
                        <label for="unit_price">Unit Price</label>
                        <div class="input">
                            <input type="text" name="unit_price" id="unit_price" value="{{ old('unit_price') }}">
                            <span>
                                @error('unit_price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-btn">
                        <input type="submit" value="Create New Products" id="add-btn" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
