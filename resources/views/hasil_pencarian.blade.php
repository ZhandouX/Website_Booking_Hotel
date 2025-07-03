@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
    @include('partials.page-header', [
        'title' => 'Booking Hotels',
        'breadcrumb' => 'Hasil Pencarian'
    ])

  {{-- Pencarian --}}
  @include('partials.search')

  {{-- Hasil Pencarian --}}
  @include('partials.hasil-pencarian')

  {{-- Welcome Section --}}
  @include('partials.testimonials')

  {{-- Newsletter --}}
  @include('partials.newsletter')

@endsection

@push('scripts')
    <!-- Javascript Hasil Pencarian -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const data = JSON.parse(localStorage.getItem("hasilPencarian")) || [];
            const container = document.getElementById("hasilHotel");

            if (data.length === 0) {
                container.innerHTML = "<p class='text-center'>Tidak ada hasil ditemukan.</p>";
                return;
            }

            data.forEach(hotel => {
                const bintang = "⭐".repeat(hotel.rating);
                const html = `
            <div class="col-lg-4 col-md-6">
                <div class="room-item shadow rounded overflow-hidden">
                <div class="position-relative">
                    <img class="img-fluid" src="${hotel.gambar}" alt="">
                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp${hotel.harga} / kamar</small>
                </div>
                <div class="p-4 mt-2">
                    <div class="d-flex justify-content-between mb-3">
                    <h5 class="mb-0">${hotel.nama}</h5>
                    <div class="ps-2">${hotel.rating}</div>
                    </div>
                    <p class="text-body mb-3">${hotel.alamat}</p>
                    <div class="d-flex justify-content-between">
                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="detail_hotel.html?id=${hotel.id}">View Detail</a>
                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="daftar_kamar.html?id=${hotel.id}">Book Now</a>
                    </div>
                </div>
                </div>
            </div>
            `;
                container.innerHTML += html;
            });
        });
    </script>
    <script> new WOW().init(); </script>

    <!-- Javascript Pencarian -->
    <script>
        function cariHotel() {
            const nama = document.getElementById("namaHotel").value.trim().toLowerCase();
            const lokasi = document.getElementById("lokasiHotel").value;
            const bintang = document.getElementById("bintangHotel").value;
            const kategori = document.getElementById("kategoriHotel").value;
            const btn = document.getElementById("btnCari");
            const loading = document.getElementById("loadingCari");
            const text = document.getElementById("textCari");

            // Validasi input (semua kosong)
            if (nama === "" && lokasi === "" && bintang === "" && kategori === "") {
                alert("Silakan isi salah satu filter pencarian terlebih dahulu.");
                return;
            }

            // Tampilkan loading
            text.classList.add("d-none");
            loading.classList.remove("d-none");
            btn.disabled = true;

            fetch("data/hotel.json")
                .then(response => response.json())
                .then(data => {
                    const hasil = data.filter(hotel => {
                        const cocokNama = nama === "" || hotel.nama.toLowerCase().includes(nama);
                        const cocokAlamat = lokasi === "" || hotel.alamat.toLowerCase().includes(lokasi.toLowerCase());
                        const cocokKategori = kategori === "" || hotel.kategori.toLowerCase().includes(kategori);
                        const jumlahBintang = hotel.rating.split("⭐").length - 1;
                        const cocokRating = bintang === "" || jumlahBintang == bintang;

                        return cocokNama && cocokAlamat && cocokRating && cocokKategori;
                    });


                    localStorage.setItem("hasilPencarian", JSON.stringify(hasil));
                    window.location.href = "{{ route('hasil_pencarian') }}";
                })
                .catch(error => {
                    alert("Terjadi kesalahan saat memuat data.");
                    console.error(error);
                })
                .finally(() => {
                    // Reset tombol
                    btn.disabled = false;
                    loading.classList.add("d-none");
                    text.classList.remove("d-none");
                });
        }
    </script>
    <script> new WOW().init(); </script>
@endpush