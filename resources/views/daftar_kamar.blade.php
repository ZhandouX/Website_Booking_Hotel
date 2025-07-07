{{-- resources/views/daftar_kamar.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Kamar')

@section('content')
    @include('partials.page-header', [
        'title' => 'Booking Hotels',
        'breadcrumb' => 'Daftar Kamar'
    ])

    {{-- Pencarian --}}
    @include('partials.search')

    {{-- Daftar Kamar --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
            </div>
            <div class="row g-4" id="daftarKamar"></div>
        </div>
    </div>

    @include('partials.newsletter')
@endsection

@push('scripts')

{{-- Javascript Pilih Kamar --}}
<script>
    fetch('{{ asset('data/detail-hotel.json') }}')
        .then(res => res.json())
        .then(data => {
            const hotelId = localStorage.getItem("selectedHotelId");
            const hotel = data[hotelId];
            const container = document.getElementById("daftarKamar");
            container.innerHTML = "";

            const kamarList = [
                { tipe: 'Standar', harga: hotel.harga_standar, img: hotel.images_standar },
                { tipe: 'Medium', harga: hotel.harga_medium, img: hotel.images_medium },
                { tipe: 'Mewah', harga: hotel.harga_mewah, img: hotel.images_mewah }
            ];

            kamarList.forEach(kamar => {
                const div = document.createElement("div");
                div.className = "col-lg-4 col-md-6 wow fadeInUp room-item";
                div.setAttribute("data-wow-delay", "0.1s");

                div.innerHTML = `
                    <div class="shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="${kamar.img}" alt="Kamar ${kamar.tipe}" style="height: 350px; object-fit: cover;">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">${kamar.harga} / malam</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0 text-truncate-1">Kamar ${kamar.tipe}</h5>
                        <div class="text-success small">✔️ Sarapan</div>
                        </div>
                        <div class="mb-2"><i class="fa fa-bed me-1"></i> 1 Queen Bed</div>
                        <p class="text-muted mb-3 text-truncate-2" style="font-size: 13px;">Gratis pembatalan sampai 30 Jun 10:59</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <span class="text-danger fw-bold" style="font-size: 18px;">${kamar.harga}</span>
                        <button class="btn btn-sm btn-danger rounded py-2 px-3" onclick="pesanKamar('${kamar.tipe}', '${kamar.harga}')">Pilih</button>
                        </div>
                    </div>
                    </div>
                `;
                container.appendChild(div);
            });
        });

    function pesanKamar(tipe, harga) {
        localStorage.setItem("kamarTipe", tipe);
        localStorage.setItem("kamarHarga", harga.replace(/[^\d]/g, ''));
        window.location.href = "{{ route('pemesanan_kamar') }}";
    }

    const pencarianRouteUrl = "{{ route('hasil_pencarian') }}";
</script>
<script src="{{ asset('js-01/pencarian.js') }}"></script>
<script> new WOW().init(); </script>
@endpush
