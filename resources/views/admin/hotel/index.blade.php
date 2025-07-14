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

    {{-- Tombol Tambah Data Hotel (hanya untuk superadmin) --}}
    @if (session('admin_role') === 'superadmin')
        <div class="mb-3 text-end">
            <a href="{{ route('hotel.create') }}" class="btn btn-success">
                + Tambah Hotel
            </a>
        </div>
    @endif

    <div class="row">
        @foreach ($hotels as $slug => $hotel)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset($hotel['gambar_1']) }}" class="card-img-top"
                        style="height: 250px; object-fit: cover;" alt="{{ $hotel['name'] }}">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">{{ $hotel['name'] }}</h4>
                        <p class="card-text text-muted">{{ Str::limit($hotel['description'], 100) }}</p>

                        <p><strong>Alamat:</strong> {{ $hotel['address'] }}</p>
                        <p><strong>Harga Mulai:</strong> {{ $hotel['harga_standar'] }}</p>
                        <p><strong>Bintang:</strong> {{ $hotel['bintang'] }}</p>
                        <a href="{{ $hotel['lokasi'] }}" target="_blank" class="btn btn-outline-primary btn-sm">
                            📍 Lihat Lokasi
                        </a>

                        {{-- Tampilkan kamar hanya jika admin hotel --}}
                        
                            <hr>
                            <h6 class="mt-3">🛏️ Tipe Kamar & Harga</h6>
                            <div class="row g-3 mt-2">
                                @isset($hotel['images_standar'])
                                    <div class="col-md-4">
                                        <div class="card border-0">
                                            <img src="{{ asset($hotel['images_standar']) }}" class="img-fluid rounded shadow-sm" alt="Standar">
                                            <div class="mt-2">
                                                <strong>Standar</strong><br>
                                                <span class="text-muted">{{ $hotel['harga_standar'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endisset

                                @isset($hotel['images_medium'])
                                    <div class="col-md-4">
                                        <div class="card border-0">
                                            <img src="{{ asset($hotel['images_medium']) }}" class="img-fluid rounded shadow-sm" alt="Medium">
                                            <div class="mt-2">
                                                <strong>Medium</strong><br>
                                                <span class="text-muted">{{ $hotel['harga_medium'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endisset

                                @isset($hotel['images_mewah'])
                                    <div class="col-md-4">
                                        <div class="card border-0">
                                            <img src="{{ asset($hotel['images_mewah']) }}" class="img-fluid rounded shadow-sm" alt="Mewah">
                                            <div class="mt-2">
                                                <strong>Mewah</strong><br>
                                                <span class="text-muted">{{ $hotel['harga_mewah'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                      

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
