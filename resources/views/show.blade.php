@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p class="text-success fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p>{{ $product->description }}</p>
            <button class="btn btn-success">
                <i class="fas fa-shopping-cart"></i> Beli Sekarang
            </button>
            <a href="{{ route('homepage') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
