@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="container">
    <h1 class="mb-4">Detail Produk</h1>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Kolom Gambar -->
                <div class="col-md-4">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded">
                    @else
                        <div class="text-center py-4 bg-light rounded">
                            <p class="text-muted">Tidak ada gambar</p>
                        </div>
                    @endif
                </div>

                <!-- Kolom Informasi Produk -->
                <div class="col-md-8">
                    <h2 class="mb-3">{{ $product->name }}</h2>
                    <p class="text-muted">Harga: <strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                    <p class="text-muted">Deskripsi:</p>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div class="mt-4">
        <a href="{{ route('homepage') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali ke Homepage
        </a>
    </div>
</div>
@endsection
