@extends('layouts.dashboard')

@section('title', 'Daftar Hotel')

@section('sidebar')
    @include('admin.sidebar')
@endsection

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (untuk tombol close alert) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-4">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <h2 class="text-center mb-4">Daftar Hotel</h2>

    {{-- Tombol Tambah Data Hotel --}}
    <div class="mb-3 text-end">
        <a href="{{ route('hotel.create') }}" class="btn btn-success">
            + Tambah Hotel
        </a>
    </div>

    <div class="row">
        @foreach ($hotels as $slug => $hotel)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset($hotel['gambar_1']) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $hotel['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotel['name'] }}</h5>
                        <p class="card-text text-muted" style="font-size: 14px;">{{ Str::limit($hotel['description'], 100) }}</p>
                        <p class="mb-1"><strong>Alamat:</strong> {{ $hotel['address'] }}</p>
                        <p class="mb-1"><strong>Harga Mulai:</strong> {{ $hotel['harga_standar'] }}</p>
                        <p class="mb-2"><strong>Bintang:</strong> {{ $hotel['bintang'] }}</p>
                        <a href="{{ $hotel['lokasi'] }}" target="_blank" class="btn btn-sm btn-outline-primary">Lihat Lokasi</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
