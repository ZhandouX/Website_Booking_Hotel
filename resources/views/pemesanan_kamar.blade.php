@extends('layouts.app')

@section('title', 'Pemesanan Kamar')

@section('content')
    @include('partials.page-header', [
        'title' => 'Booking Hotels',
        'breadcrumb' => 'Pemesanan Kamar'
    ])

  {{-- Pencarian --}}
  @include('partials.search')

  {{-- Form Booking --}}
  @include('partials.form-booking')

  {{-- Welcome Section --}}
  @include('partials.testimonials')

  {{-- Newsletter --}}
  @include('partials.newsletter')

  {{-- Newsletter --}}
@endsection

@push('scripts')
    <!-- Javascript Pembayaran -->
    <script>
        const tipeKamar = localStorage.getItem("kamarTipe");
        const hargaKamar = parseInt(localStorage.getItem("kamarHarga"));

        document.getElementById("tipeKamar").innerText = tipeKamar;
        document.getElementById("hargaKamar").innerText = hargaKamar.toLocaleString();

        const form = document.getElementById("formBooking");
        const totalBayarText = document.getElementById("totalBayar");

        function hitungTotal() {
            const jumlahKamar = parseInt(document.getElementById("jumlahKamar").value);
            const dewasa = parseInt(document.getElementById("jumlahDewasa").value);
            const anak = parseInt(document.getElementById("jumlahAnak").value);
            const total = hargaKamar * jumlahKamar * (dewasa + 0.5 * anak);
            totalBayarText.innerText = total.toLocaleString();
            return total;
        }

        form.addEventListener("input", hitungTotal);
        window.onload = hitungTotal;

        form.addEventListener("submit", async function (e) {
            e.preventDefault();
            const total = hitungTotal();

            const data = {
                nama: document.getElementById("namaPemesan").value,
                email: document.getElementById("emailPemesan").value,
                hp: document.getElementById("hpPemesan").value,
                amount: total
            };

            try {
                const response = await fetch("create_transaction.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (result.token) {
                    snap.pay(result.token, {
                        onSuccess: function () {
                            alert("Pembayaran berhasil!");
                            location.reload();
                        },
                        onPending: function () {
                            alert("Pembayaran belum selesai. Cek Midtrans.");
                            location.reload();
                        },
                        onError: function () {
                            alert("Pembayaran gagal.");
                        }
                    });
                } else {
                    alert("Gagal mendapatkan token Midtrans.");
                    console.error(result);
                }

            } catch (error) {
                alert("Terjadi kesalahan.");
                console.error(error);
            }
        });
    </script>

    <!-- Java Script Pencarian -->
    <script>
        const pencarianRouteUrl = "{{ route('hasil_pencarian') }}";
    </script>
    <script src="{{ asset('js-01/pencarian.js') }}"></script>
@endpush