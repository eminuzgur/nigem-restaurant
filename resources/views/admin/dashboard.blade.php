@extends('admin.layouts.app')

@section('css')
    <style>
        .cards {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 20px;
            margin: 20px 0;
        }
    </style>
@endsection

@section('content')
    <div class="cards">
        <div class="card">
            <h3>Customer</h3>
            <h4>1900</h4>
        </div>
        <div class="card">
            Categories
        </div>
        <div class="card">
            Products
        </div>
        <div class="card">
            Orders
        </div>
    </div>
@endsection
