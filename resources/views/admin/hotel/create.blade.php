@extends('layouts.dashboard')

@section('title', 'Tambah Hotel Lengkap')

@section('sidebar')
    @include('admin.sidebar')
@endsection

@section('content')
    <div class="container mt-4">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <h3>Tambah Data Hotel</h3>


        <form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Nama Hotel</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Link Lokasi (Google Maps)</label>
                <input type="url" name="lokasi" class="form-control">
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>Luas</label>
                <input type="text" name="luas" class="form-control">
            </div>

            <div class="mb-3">
                <label>Status</label>
                <input type="text" name="status" class="form-control" value="Penginapan">
            </div>

            <div class="mb-3">
                <label>Bintang</label>
                <input type="text" name="bintang" class="form-control" value="⭐ ⭐">
            </div>

            <div class="mb-3">
                <label>Pembayaran</label>
                <input type="text" name="pembayaran" class="form-control">
            </div>

            <div class="mb-3">
                <label>Keamanan</label>
                <input type="text" name="keamanan" class="form-control">
            </div>

            <div class="mb-3">
                <label>Upload Gambar Hotel 1 - 5</label>
                @for ($i = 1; $i <= 5; $i++)
                    <input type="file" name="gambar_{{ $i }}" class="form-control mb-2" accept="image/*"
                        required>
                @endfor
            </div>

            <div class="mb-3">
                <label>Harga & Upload Gambar Kamar</label>
                <input type="text" name="harga_standar" class="form-control mb-2" placeholder="Rp50.000" required>
                <input type="file" name="images_standar" class="form-control mb-2" accept="image/*" required>

                <input type="text" name="harga_medium" class="form-control mb-2" placeholder="Rp150.000" required>
                <input type="file" name="images_medium" class="form-control mb-2" accept="image/*" required>

                <input type="text" name="harga_mewah" class="form-control mb-2" placeholder="Rp300.000" required>
                <input type="file" name="images_mewah" class="form-control mb-2" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label>Fasilitas Utama (icon|nama, pisahkan dengan koma)</label>
                <textarea name="fasilitas_utama" class="form-control" required>🛏️|AC, 🚗|Parkir, 🍽️|Restoran, 📶|WIFI</textarea>

            </div>


            <div class="mb-3">
                <label>Tempat Terdekat (pisahkan dengan koma)</label>
                <textarea name="tempat_terdekat" class="form-control" placeholder="Alfamidi (10 km), Coto Makassar (50 m)" required></textarea>
            </div>

            <div class="mb-3">
                <label>Fasilitas Deskripsi</label>
                <textarea name="fasilitas" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>Lokasi Strategis</label>
                <textarea name="lokasi_strategis" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>Alasan</label>
                <textarea name="alasan" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>Tipe Kamar (pisahkan dengan koma)</label>
                <textarea name="tipe_kamar" class="form-control" placeholder="Deluxe - Termasuk sarapan, Family Suite" required></textarea>
            </div>

            <div class="mb-3">
                <label>Kebijakan Hotel (pisahkan dengan koma)</label>
                <textarea name="kebijakan_hotel" class="form-control"
                    placeholder="Check-in mulai pukul 14.00, Check-out maksimal pukul 12.00" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
