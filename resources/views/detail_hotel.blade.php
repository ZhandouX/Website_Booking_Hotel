<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Booking Hotels - Detail Informasi Hotel</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <link href="https://fonts.cdnfonts.com/css/mangifera" rel="stylesheet">
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
          <a href="#" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
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
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
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
                    <a href="{{ route('about_us.testimonial') }}" class="dropdown-item">Testimonial</a>
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
              <li class="breadcrumb-item text-white active font-raleway fw-bold" aria-current="page">Detail Hotel</li>
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

    <!-- Data detail hotel -->
    <div class="row">
      <div class="col-12 p-4 bg-white rounded shadow">
        <div class="row g-3 mb-4">
          <!-- Gambar besar kiri -->
          <div class="col-md-8">
            <img id="gambar-1" class="img-fluid rounded w-100" style="height: 380px; object-fit: cover;"
              alt="Gambar Utama">
          </div>
          <!-- Gambar kecil kanan -->
          <div class="col-md-4">
            <div class="row g-2">
              <div class="col-6">
                <img id="gambar-2" class="img-fluid rounded w-100" style="height: 185px; width: object-fit: cover;"
                  alt="Gambar 2">
              </div>
              <div class="col-6">
                <img id="gambar-3" class="img-fluid rounded w-100" style="height: 185px; object-fit: cover;"
                  alt="Gambar 3">
              </div>
              <div class="col-6">
                <img id="gambar-4" class="img-fluid rounded w-100" style="height: 185px; object-fit: cover;"
                  alt="Gambar 4">
              </div>
              <div class="col-6 position-relative" id="gambar-5-wrapper" style="cursor: pointer;">
                <img id="gambar-5" class="img-fluid rounded w-100" style="height: 185px; object-fit: cover;"
                  alt="Gambar 5">
                <div
                  class="position-absolute top-0 start-0 w-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center rounded">
                  <span class="text-white fw-semibold small">Lihat Semua Foto</span>
                </div>
              </div>
            </div>
          </div>
        </div>  

        <!-- Judul dan Bintang -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="fw-bold fs-3 text-dark mb-2 hotel-title font-arial"><!--Judul Hotel--></h2>
          <a href="{{ route('daftar_kamar') }}" class="btn btn-primary rounded-3 px-4 py-2 fw-semibold">Pilih Kamar</a>
        </div>
        <div id="bintang-hotel" class="mb-4 text-muted small">
          <span class="bg-primary bg-opacity-10 text-primary px-2 py-1 rounded fw-semibold"></span>

        </div>
        <!-- Grid 3 Kolom -->
        <div class="row g-4 mb-4">
          <!-- Rating dan Ulasan -->
          <div class="col-md-4">
            <div class="bg-light p-3 rounded">
              <p class="fs-2 fw-bold text-primary mb-0">8,6<span class="fs-6">/10</span></p>
              <p class="small text-muted">Mengesankan (772 review)</p>
              <div class="mt-2 d-flex flex-wrap gap-1">
                <span class="badge bg-success bg-opacity-20 rounded-1">Suasana (44)</span>
                <span class="badge bg-success bg-opacity-20 rounded-1">Jarak Ke Pusat Kota (43)</span>
                <span class="badge bg-success bg-opacity-20 rounded-1">Keramahan Staff (42)</span>
                <span class="badge bg-success bg-opacity-20 rounded-1">Kamar Tidur (41)</span>
              </div>
            </div>
          </div>
          <!-- Area Akomodasi -->
          <div class="col-md-4">
            <div class="bg-light p-3 rounded">
              <h5 class="fw-semibold text-secondary">Area Akomodasi</h5>
              <p class="alamat small text-primary mb-1"><a href="#" target="_blank"></a></p>
              <ul id="tempat-terdekat" class="list-unstyled small ps-3">
                <!-- Tempat Terdekat akan dimuat JS -->
              </ul>
            </div>
          </div>
          <!-- Fasilitas Utama -->
          <div class="col-md-4">
            <div class="bg-light p-3 rounded">
              <h5 class="fw-semibold text-secondary">Fasilitas Utama</h5>
              <div id="fasilitas-utama" class="row row-cols-2 small g-2 text-muted">
                <!-- JS akan isi -->
              </div>
            </div>
          </div>
        </div>
        <!-- Deskripsi Alasan -->
        <p id="deskripsi-alasan" class="small text-muted"></p>
      </div>
    </div>

    <!-- Reset -->
    <div class="container-xxl py-5 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <h2 class="text-center mb-5 text-primary">Informasi Lengkap Hotel</h2>
            <div class="accordion" id="hotelDetailsAccordion">

              <!-- Fasilitas Hotel -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFasilitas">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFasilitas" aria-expanded="true" aria-controls="collapseFasilitas">
                    🏨 Fasilitas Hotel
                  </button>
                </h2>
                <div id="collapseFasilitas" class="accordion-collapse collapse show" aria-labelledby="headingFasilitas"
                  data-bs-parent="#hotelDetailsAccordion">
                  <div class="accordion-body" id="deskripsi-fasilitas">
                    <!-- Diisi dinamis melalui JS -->
                  </div>
                </div>
              </div>

              <!-- Lokasi Strategis -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingLokasi">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseLokasi" aria-expanded="false" aria-controls="collapseLokasi">
                    📍 Lokasi Strategis
                  </button>
                </h2>
                <div id="collapseLokasi" class="accordion-collapse collapse" aria-labelledby="headingLokasi"
                  data-bs-parent="#hotelDetailsAccordion">
                  <div class="accordion-body" id="deskripsi-lokasi">
                    <!-- Diisi dinamis melalui JS -->
                  </div>
                </div>
              </div>

              <!-- Alasan Memilih -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingAlasan">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseAlasan" aria-expanded="false" aria-controls="collapseAlasan">
                    ⭐ Alasan Memilih Hotel Ini
                  </button>
                </h2>
                <div id="collapseAlasan" class="accordion-collapse collapse" aria-labelledby="headingAlasan"
                  data-bs-parent="#hotelDetailsAccordion">
                  <div class="accordion-body" id="alasan">
                    <!-- Diisi dinamis melalui JS -->
                  </div>
                </div>
              </div>

              <!-- Tipe Kamar -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingKamar">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseKamar" aria-expanded="false" aria-controls="collapseKamar">
                    🛏️ Tipe Kamar
                  </button>
                </h2>
                <div id="collapseKamar" class="accordion-collapse collapse" aria-labelledby="headingKamar"
                  data-bs-parent="#hotelDetailsAccordion">
                  <div class="accordion-body">
                    <ul id="tipe-kamar" class="list-unstyled small ps-3">
                      <!-- Diisi dinamis melalui JS -->
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Kebijakan Hotel -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingKebijakan">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseKebijakan" aria-expanded="false" aria-controls="collapseKebijakan">
                    📋 Kebijakan Hotel
                  </button>
                </h2>
                <div id="collapseKebijakan" class="accordion-collapse collapse" aria-labelledby="headingKebijakan"
                  data-bs-parent="#hotelDetailsAccordion">
                  <div class="accordion-body" id="kebijakan-hotel">
                    <ul id="kebijakan-hotel" class="list-unstyled small ps-3">
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Ulasan Pengunjung -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingUlasan">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseUlasan" aria-expanded="false" aria-controls="collapseUlasan">
                    💬 Ulasan Tamu
                  </button>
                </h2>
                <div id="collapseUlasan" class="accordion-collapse collapse" aria-labelledby="headingUlasan"
                  data-bs-parent="#hotelDetailsAccordion">
                  <div class="accordion-body" id="ulasan-tamu">
                    <!-- Isi ulasan dari JSON akan ditampilkan di sini -->
                  </div>
                </div>
                <div class="container mt-5">
                  <h4 class="mb-4">Tinggalkan Ulasan Anda</h4>
                  <form id="form-ulasan">
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="pesan" class="form-label">Pesan/Ulasan</label>
                      <textarea class="form-control" id="pesan" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
                  </form>
                </div>
              </div>
            </div>
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
            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
              <button type="button"
                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Lightbox Gambar Hotel -->
  <div id="lightboxModal"
    class="hidden d-none position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 justify-content-center align-items-center z-1050"
    onclick="handleOverlayClick(event)" style="z-index: 1050;">
    <!-- Tombol Close -->
    <button onclick="closeModal()" class="btn-close btn-close-white position-absolute top-0 end-0 m-4 z-1051"></button>
    <!-- Tombol Kiri -->
    <button onclick="prevImage()"
      class="position-absolute top-50 start-0 translate-middle-y text-white fs-1 bg-transparent border-0 z-1051">&#10094;</button>
    <!-- Gambar -->
    <div class="d-flex justify-content-center align-items-center w-100" style="height: 80vh;">
      <img id="modalImage" src="" alt="Gambar Hotel"
        class="img-fluid rounded shadow max-height-100 transition-opacity opacity-100" style="max-height: 80vh;" />
    </div>
    <!-- Tombol Kanan -->
    <button onclick="nextImage()"
      class="position-absolute top-50 end-0 translate-middle-y text-white fs-1 bg-transparent border-0 z-1051">&#10095;</button>
  </div>

  <!-- Footer -->
  <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
      <div class="row g-5">
        <div class="col-md-6 col-lg-4">
          <div class="bg-dark rounded p-6">
            <a href="#" class="logo-ambon mb-2"><img src="{{ asset('images/header/logo-02.png') }}" alt="" /></a>
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

  <!-- Javascript Pemanggilan Data Detail Hotel-->
  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const hotelId = urlParams.get("id");

    // Global
    let gambarHotel = [];
    let currentImageIndex = 0;

    function openModal(index) {
      if (!Array.isArray(gambarHotel) || gambarHotel.length === 0) return;

      currentImageIndex = index;
      updateModalImage();

      const modal = document.getElementById("lightboxModal");
      modal.classList.remove("d-none");
      modal.classList.add("d-flex");
    }

    function closeModal() {
      const modal = document.getElementById("lightboxModal");
      modal.classList.remove("d-flex");
      modal.classList.add("d-none");
    }


    function prevImage() {
      currentImageIndex = (currentImageIndex - 1 + gambarHotel.length) % gambarHotel.length;
      updateModalImage();
    }

    function nextImage() {
      currentImageIndex = (currentImageIndex + 1) % gambarHotel.length;
      updateModalImage();
    }

    function updateModalImage() {
      const modalImage = document.getElementById("modalImage");
      modalImage.classList.add("opacity-0");
      setTimeout(() => {
        modalImage.src = gambarHotel[currentImageIndex];
        modalImage.classList.remove("opacity-0");
      }, 150);
    }

    // Tutup modal jika klik di luar gambar
    document.getElementById("lightboxModal").addEventListener("click", function (event) {
      if (event.target.id === "lightboxModal") {
        closeModal();
      }
    });

    // Fetch data hotel
    fetch("data/detail-hotel.json")
      .then(response => response.json())
      .then(hotelData => {
        if (hotelData[hotelId]) {
          const data = hotelData[hotelId];
          localStorage.setItem("selectedHotelId", hotelId);

          document.querySelector(".hotel-title").innerText = data.name;
          const alamatLink = document.querySelector(".alamat a");
          alamatLink.innerText = data.address;
          alamatLink.href = data.lokasi;

          document.getElementById("deskripsi-fasilitas").innerHTML = data.fasilitas;
          document.getElementById("deskripsi-lokasi").innerText = data.lokasi_strategis;
          document.getElementById("alasan").innerText = data.alasan;
          document.getElementById("bintang-hotel").innerHTML = `<span>${data.bintang}</span>`;
          let container = document.getElementById("fasilitas-utama");
          data.fasilitas_utama.forEach(f => {
            let div = document.createElement("div");
            div.className = "d-flex align-items-center gap-2 mb-2";
            div.innerHTML = `<span>${f.icon}</span> ${f.nama}`;
            container.appendChild(div);
          });

          let ul = document.getElementById("tempat-terdekat");
          data.tempat_terdekat.forEach(tempat => {
            let li = document.createElement("li");
            li.innerText = tempat;
            ul.appendChild(li);
          });

          let tipeKamarList = document.getElementById("tipe-kamar");
          data.tipe_kamar.forEach(kamar => {
            let li = document.createElement("li");
            li.innerText = kamar;
            tipeKamarList.appendChild(li);
          });

          let kebijakanHotelList = document.getElementById("kebijakan-hotel");
          data.kebijakan_hotel.forEach(kebijakanHotel => {
            let li = document.createElement("li");
            li.innerText = kebijakanHotel;
            kebijakanHotelList.appendChild(li);
          });


          // Gambar
          document.getElementById("gambar-1").src = data.gambar_1;
          document.getElementById("gambar-2").src = data.gambar_2;
          document.getElementById("gambar-3").src = data.gambar_3;
          document.getElementById("gambar-4").src = data.gambar_4;
          document.getElementById("gambar-5").src = data.gambar_5;
          document.getElementById("gambar-6").src = data.gambar_6;
          document.getElementById("gambar-7").src = data.gambar_7;
          document.getElementById("gambar-8").src = data.gambar_8;



          gambarHotel = [
            data.gambar_1,
            data.gambar_2,
            data.gambar_3,
            data.gambar_4,
            data.gambar_5,
            data.gambar_6,
            data.gambar_7,
            data.gambar_8,
            data.gambar_9,
            data.gambar_10
          ];

          // Tambahkan event click ke gambar ke-5 setelah gambar siap
          const lihatSemua = document.getElementById("gambar-5-wrapper");
          if (lihatSemua && gambarHotel.length > 0) {
            lihatSemua.addEventListener("click", () => {
              if (gambarHotel[0]) openModal(0);
            });
          }


        } else {
          document.querySelector(".main-content").innerHTML = "<h4>Hotel tidak ditemukan</h4>";
        }
      })
      .catch(error => {
        console.error("Gagal memuat detail hotel:", error);
        document.querySelector(".main-content").innerHTML = "<h4>Gagal memuat data hotel.</h4>";
      });
  </script>

  <script>
    function handleOverlayClick(event) {
      if (event.target.id === "lightboxModal") {
        closeModal();
      }
    }
  </script>

  <!-- JS Fitur Pencarian -->
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

  <!-- Fitur ulasan hotel -->
  <script>
    document.getElementById("form-ulasan").addEventListener("submit", function (e) {
      e.preventDefault();

      // Ambil nilai input form
      const nama = document.getElementById("nama").value.trim();
      const email = document.getElementById("email").value.trim();
      const pesan = document.getElementById("pesan").value.trim();

      // Ambil ID hotel dari parameter URL (?id=oyo-azzahra)
      const urlParams = new URLSearchParams(window.location.search);
      const hotelId = urlParams.get("id");
      const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      if (!hotelId) {
        alert("ID hotel tidak ditemukan di URL.");
        return;
      }

      // Ambil nama hotel dari file JSON lokal
      fetch("/data/detail-hotel.json")
        .then(response => {
          if (!response.ok) throw new Error("Gagal membaca file detail hotel.");
          return response.json();
        })
        .then(data => {
          const namaHotel = data[hotelId]?.name;

          if (!namaHotel) {
            alert("Data hotel tidak ditemukan.");
            return;
          }

          // Siapkan data ulasan
          const ulasan = {
            id: hotelId,
            name: namaHotel,
            nama_pengunjung: nama,
            email: email,
            pesan: pesan
          };

          // Kirim ulasan ke Laravel endpoint
          fetch("/kirim-ulasan", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
              "X-CSRF-TOKEN": csrfToken,
              "Accept": "application/json"
            },
            body: JSON.stringify(ulasan)
          })
            .then(res => res.json())
            .then(response => {
              alert(response.message || "Ulasan berhasil dikirim.");
              document.getElementById("form-ulasan").reset();
            })
            .catch(error => {
              console.error("Terjadi kesalahan:", error);
              alert("Gagal mengirim ulasan.");
            });
        })
        .catch(err => {
          console.error("Gagal ambil data hotel:", err);
          alert("Gagal mengambil informasi hotel.");
        });
    });
  </script>

  <!-- Menampilkan data ulasan -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const urlParams = new URLSearchParams(window.location.search);
      const hotelId = urlParams.get("id");

      if (!hotelId) return;

      const ulasanContainer = document.getElementById("ulasan-tamu");

      fetch("/data/detail-hotel.json")
        .then(res => {
          if (!res.ok) throw new Error("Gagal ambil detail hotel");
          return res.json();
        })
        .then(detailData => {
          // Debug ID dan data detail
          console.log("ID hotel dari URL:", hotelId);
          console.log("Apakah hotel tersedia di detail-hotel.json?", detailData[hotelId]);

          // Cek apakah ID ditemukan dalam detail-hotel.json
          if (!detailData[hotelId]) {
            ulasanContainer.innerHTML = "<p>Hotel tidak ditemukan.</p>";
            return;
          }

          // Lanjut ambil ulasan
          fetch("/ambil-ulasan")
            .then(res => {
              if (!res.ok) throw new Error("Gagal ambil ulasan");
              return res.json();
            })
            .then(ulasanData => {
              console.log("Semua ulasan:", ulasanData);

              const ulasanHotel = ulasanData.filter(
                u => u.id?.trim().toLowerCase() === hotelId.trim().toLowerCase()
              );

              console.log("Ulasan yang cocok:", ulasanHotel);

              if (ulasanHotel.length === 0) {
                ulasanContainer.innerHTML = "<p>Belum ada ulasan untuk hotel ini.</p>";
                return;
              }

              ulasanContainer.innerHTML = "";
              ulasanHotel.forEach(item => {
                ulasanContainer.innerHTML += `
                <blockquote>
                  “${item.pesan}”<br>
                  — <strong>${item.nama_pengunjung}</strong> (<em>${item.email}</em>)
                </blockquote>
              `;
              });
            })
            .catch(err => {
              console.error("Gagal fetch ulasan:", err);
              ulasanContainer.innerHTML = "<p>Gagal memuat ulasan.</p>";
            });
        })
        .catch(err => {
          console.error("Gagal ambil detail-hotel.json:", err);
          ulasanContainer.innerHTML = "<p>Gagal memuat data hotel.</p>";
        });
    });
  </script>



</body>

</html>