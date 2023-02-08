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
                    <input type="text" name="first_name" id="firs_tname">
                </div>
                <div class="form-input">
                    <label for="last_name">last Name</label>
                    <input type="text" name="last_name" id="last_name">
                </div>
                <div class="form-input">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone">
                </div>
                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-input">
                    <label for="address">Adress</label>
                    <input type="text" name="address" id="address">
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
