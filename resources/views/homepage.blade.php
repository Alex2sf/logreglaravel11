@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Selamat Datang di Toko Kami</h1>

    <!-- Daftar Produk -->
    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <!-- Gambar Produk -->
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    @else
                        <div class="text-center py-4 bg-light">
                            <p class="text-muted">Tidak ada gambar</p>
                        </div>
                    @endif

                    <!-- Informasi Produk -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text"><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                    </div>

                    <!-- Tombol Lihat Detail -->
                    <div class="card-footer bg-white">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-block">
                            <i class="fas fa-eye"></i> Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Tidak ada produk yang tersedia.
                </div>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if ($products->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    @endif
</div>
@endsection
