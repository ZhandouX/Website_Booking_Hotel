@extends('layouts.app-about')

@section('title', 'About')

@section('content')
    @include('partials.page-header', [
        'title' => 'Booking Hotels',
        'breadcrumb' => 'About'
    ])

  {{-- Pencarian --}}
  @include('partials.search')

  {{-- About Content --}}
  @include('partials.about')

  {{-- Testimonials --}}
  @include('partials.testimonials')

  {{-- Newsletter --}}
  @include('partials.newsletter')

@endsection

@push('scripts')
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

            fetch("/data/hotel.json")
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