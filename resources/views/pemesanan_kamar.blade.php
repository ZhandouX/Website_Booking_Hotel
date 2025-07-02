<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking Hotels - Pemesanan Kamar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css-01/bootstrap.min.css" rel="stylesheet">
    <link href="css-01/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-light p-0">
        <!-- Loading -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <img class="logo-loading justify-content-center" src="{{ asset('images/header/logo-01.png') }}">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- Header -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block logo logo-ambon">
                    <a href="#"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/header/logo-02.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-dark d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">bookinghotels@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+62 821-9152-0697</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 text-center">
                        <a href="{{ route('dashboard') }}" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Booking Hotels</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between font-lato" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0 ">
                                <a href="{{ route('dashboard') }}" class="nav-item nav-link">Home</a>
                                <a href="{{ route('properties') }}" class="nav-item nav-link">Hotel List</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{ route('about_us.team') }}" class="dropdown-item">Our Team</a>
                                        <a href="{{ route('about_us.testimonial') }}"
                                            class="dropdown-item">Testimonial</a>
                                        <a href="{{ route('about_us.about') }}" class="dropdown-item">About</a>
                                        <a href="{{ route('about_us.service') }}" class="dropdown-item">Services</a>
                                        <a href="{{ route('about_us.contact') }}" class="dropdown-item">Contact</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown font-title-cavas">Booking Hotels</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item text-white active font-raleway fw-bold" aria-current="page">
                                Pemesanan Kamar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Pencarian -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 40px">
                    <div class="row g-2 justify-content-center">
                        <div class="col-md-13">
                            <div class="row g-2 justify-content-center">
                                <div class="col-md-3">
                                    <input type="text" id="namaHotel" class="form-control" placeholder="Nama Hotel">
                                </div>
                                <div class="col-md-3">
                                    <select id="lokasiHotel" class="form-select">
                                        <option selected value="">Pilih Lokasi</option>
                                        <option value="Teluk Ambon">Teluk Ambon</option>
                                        <option value="Sirimau">Sirimau</option>
                                        <option value="Nusaniwe">Nusaniwe</option>
                                        <option value="Baguala">Baguala</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select id="bintangHotel" class="form-select">
                                        <option selected value="">Pilih Bintang</option>
                                        <option value="1">⭐</option>
                                        <option value="2">⭐⭐</option>
                                        <option value="3">⭐⭐⭐</option>
                                        <option value="4">⭐⭐⭐⭐</option>
                                        <option value="5">⭐⭐⭐⭐⭐</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select id="kategoriHotel" class="form-select">
                                        <option selected value="">Pilih Kategori</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="penginapan">Penginapan</option>
                                        <option value="apartemen">Apartemen</option>
                                        <option value="villa">Villa</option>
                                    </select>
                                </div>
                                <div class="container-fluid">
                                    <button id="btnCari" onclick="cariHotel()" class="btn btn-primary w-100">
                                        <span id="textCari"><i class="fa fa-search me-2"></i>Cari</span>
                                        <span id="loadingCari" class="spinner-border spinner-border-sm d-none"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Pemesanan -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>

                    <!-- Form Booking -->
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form id="formBooking">
                                <div class="row g-3 booking-form">
                                    <p>Tipe Kamar: <strong id="tipeKamar"></strong></p>
                                    <p>Harga per Kamar: <strong>Rp<span id="hargaKamar"></span></strong></p>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="namaPemesan"
                                                placeholder="Nama Pemesan" required>
                                            <label for="namaPemesan">Nama Pemesan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="emailPemesan"
                                                placeholder="Email" required>
                                            <label for="emailPemesan">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="hpPemesan" placeholder="Nomor HP"
                                                required>
                                            <label for="hpPemesan">Nomor HP</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="jumlahKamar"
                                                placeholder="Jumlah Kamar" min="1" value="1" required>
                                            <label for="jumlahKamar">Jumlah Kamar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="jumlahDewasa"
                                                placeholder="Jumlah Dewasa" min="1" value="1" required>
                                            <label for="jumlahDewasa">Jumlah Dewasa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="jumlahAnak"
                                                placeholder="Jumlah Anak-anak" min="0" value="0" required>
                                            <label for="jumlahAnak">Jumlah Anak-anak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="tanggalCheckin"
                                                placeholder="Check-in" required>
                                            <label for="tanggalCheckin">Tanggal Check-in</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="fw-bold fs-5 mt-3">Total Bayar: Rp<span id="totalBayar">0</span></p>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3 rounded-3" type="submit">Bayar
                                            Sekarang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Newsletter -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span>
                            </h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Enter your email">
                                <button type="button"
                                    class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2 rounded-3">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-dark rounded p-6">
                            <a href="#" class="logo-ambon mb-2"><img src="{{ asset('images/header/logo-02.png') }}"
                                    alt="" /></a>
                            <div class="payment-icons">
                                <img src="{{ asset('images/payments/visa-01.png') }}" alt="Visa">
                                <img src="{{ asset('images/payments/mastercard-01.png') }}" alt="MasterCard">
                                <img src="{{ asset('images/payments/bri-01.png') }}" alt="BRI">
                                <img src="{{ asset('images/payments/bca-01.png') }}" alt="BCA">
                                <img src="{{ asset('images/payments/mandiri-01.png') }}" alt="Mandiri">
                                <img src="{{ asset('images/payments/paypal-01.png') }}" alt="PayPal">
                                <img src="{{ asset('images/payments/indomaret-01.png') }}" alt="Indomaret">
                                <img src="{{ asset('images/payments/alfamidi-01.png') }}" alt="Alfamidi">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Booking Hotels, Kota Ambon</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 821-9152-0697</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>bookinghotels@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Pemesanan Hotel</a>
                                <a class="btn btn-link" href="">Pembayaran Online</a>
                                <a class="btn btn-link" href="">Rekomendasi Hotel</a>
                                <a class="btn btn-link" href="">Layanan Pelanggan</a>
                                <a class="btn btn-link" href="">Transaksi Aman</a>
                                <a class="btn btn-link" href="">Kemitraan Hotel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Booking Hotels</a>, All Right Reserved.
                            Designed By <a class="border-bottom" href="{{ route('about_us.team') }}">Group 3</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js-01/main.js"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-iTly_e1XO5Vs5x7k"></script>

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
</body>

</html>