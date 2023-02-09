@extends('admin.layouts.app')

@section('title')
    Create New Customer
@endsection


@section('content')
    <div class="row">
        <div class="form-wrapper">
            <form action="{{ route('customer-store') }}" method="POST" class="create-form">
                @csrf
                @method('Post')
                <div class="form-input">
                    <label for="firt_name">First Name</label>
                    <div class="input">
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
                        <span>
                            @error('first_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-input">
                    <label for="last_name">last Name</label>
                    <div class="input">
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
                        <span>
                            @error('last_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-input">
                    <label for="phone">Phone</label>
                    <div class="input">
                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}">
                        <span>
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-input">
                    <label for="email">Email</label>
                    <div class="input">
                        <input type="email" name="email" id="email" value="{{ old('email') }}">
                        <span>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-input">
                    <label for="address">Adress</label>
                    <div class="input">
                        <input type="text" name="address" id="address" value="{{ old('address') }}">
                        <span>
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-btn">
                    <input type="submit" value="Create New Products" id="add-btn" class="btn btn-primary">
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
