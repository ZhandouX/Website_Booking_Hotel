<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Welcome to Booking Hotels</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="/css-01/bootstrap.min.css" rel="stylesheet">
  <link href="/css-01/style.css" rel="stylesheet">
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
            <a href="#" class="navbar-brand d-block d-lg-none">
              <h1 class="m-0 text-primary text-uppercase">Booking Hotels</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between font-lato" id="navbarCollapse">
              <div class="navbar-nav mr-auto py-0">
                @if (Session::has('user'))
          <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Dashboard</a>
          <form action="{{ url('/logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="nav-item nav-link btn btn-link text-danger"
            style="text-decoration: none;">Logout</button>
          </form>
        @else
          <a href="{{ url('/login') }}" class="nav-item nav-link">Login</a>
          <a href="{{ url('/register') }}" class="nav-item nav-link">Register</a>
        @endif
              </div>
            </div>

          </nav>
        </div>
      </div>
    </div>

    <!-- Page Header -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(/img/carousel-1.jpg);">
      <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown font-title-cavas">Booking Hotels</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item text-white active font-raleway fw-bold" aria-current="page">
                Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <!-- Hero Section -->
    <div class="container-fluid bg-light py-5 mb-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <h1 class="display-4 mb-4">
              Booking Hotels<br><span class="text-primary">Pesan Hotel Mudah & Cepat</span>
            </h1>
            <p class="mb-4">Temukan hotel terbaik dengan harga terbaik di berbagai kota Indonesia.
              Cukup beberapa klik, kamar hotel impianmu sudah bisa dipesan!
            </p>
            <a href="#cari" class="btn btn-primary py-3 px-5 me-3">Pesan Sekarang</a>
            <a href="#fitur" class="btn btn-outline-primary py-3 px-5">Lihat Fitur</a>
          </div>
          <div class="col-lg-6 text-center">
            <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.3s" src="/images/ambon-city.jpg"
              alt="Booking Illustration">
          </div>
        </div>
      </div>
    </div>

    <!-- Fitur Utama -->
    <div id="fitur" class="container-xxl py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h6 class="section-title text-center text-primary text-uppercase">Fitur Kami</h6>
          <h1 class="mb-4">Mengapa Memilih <span class="text-primary">Booking Hotels?</span></h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-sm-6">
            <div class="service-item text-center p-4 border rounded">
              <i class="fa fa-search fa-2x text-primary mb-3"></i>
              <h5 class="mb-2">Cari Hotel Mudah</h5>
              <p>Temukan hotel berdasarkan nama, lokasi, atau bintang hanya dalam hitungan detik.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="service-item text-center p-4 border rounded">
              <i class="fa fa-wallet fa-2x text-primary mb-3"></i>
              <h5 class="mb-2">Harga Terbaik</h5>
              <p>Dapatkan penawaran menarik dan promo hotel sesuai anggaran Anda.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="service-item text-center p-4 border rounded">
              <i class="fa fa-credit-card fa-2x text-primary mb-3"></i>
              <h5 class="mb-2">Pembayaran Aman</h5>
              <p>Didukung berbagai metode pembayaran dan sistem keamanan terpercaya.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="service-item text-center p-4 border rounded">
              <i class="fa fa-headset fa-2x text-primary mb-3"></i>
              <h5 class="mb-2">Layanan 24/7</h5>
              <p>Tim support kami siap membantu Anda kapan pun dibutuhkan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Ajakan Booking -->
    <div id="cari" class="container-fluid bg-primary text-white py-5 mt-5">
      <div class="container text-center py-5">
        <h1 class="display-5 mb-4">Siap Liburan? Pesan Kamar Hotel Sekarang!</h1>
        <p class="mb-4">Jangan lewatkan promo dan penawaran spesial dari Booking Hotels</p>
        <a href="{{ route('login') }}" class="btn btn-light py-3 px-5">Mulai Booking</a>
      </div>
    </div>


    <!-- Video -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s" id="daftar-hotel">
      <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center">
          <div class="p-5">
            <h6 class="section-title text-start text-white text-uppercase mb-3">List Hotels</h6>
            <h1 class="text-white mb-4">Temukan Hotel Pilihan Anda!</h1>
            <p class="text-white mb-4">Kami menyediakan beberapa <strong class="text-primary">Daftar
                Hotel</strong> berdasarkan data real-time.
              Ada bermacam-macam kelas yang kami sediakan, mulai dari kelas <strong class="text-primary">Standar,
                Nyaman, dan Mewah</strong>.
              Kami juga menyediakan daftar <strong class="text-primary">booking penginapan </strong>yang
              membantu anda menemukan tempat beristirahat dengan mudah dan terpercaya.
            </p>
            <a href="{{ route('properties') }}" class="btn btn-primary py-md-3 px-md-5 me-3">Lihat Daftar
              Hotel</a>
            <a href="{{ route('about_us.contact') }}" class="btn btn-light py-md-3 px-md-5">Hubungi Kami</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="video">
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://youtu.be/uMMLMlNTzQs"
              data-bs-target="#videoModal">
              <span></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
              <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
          <h1 class="mb-5"><span class="text-primary text-uppercase">Contact</span> For Any Query</h1>
        </div>
        <div class="row g-4">
          <div class="col-12">
            <div class="row gy-4">
              <div class="col-md-4">
                <h6 class="section-title text-start text-primary text-uppercase">Booking</h6>
                <p><i class="fa fa-envelope-open text-primary me-2"></i>bookinghotels@gmail.com</p>
              </div>
              <div class="col-md-4">
                <h6 class="section-title text-start text-primary text-uppercase">General</h6>
                <p><i class="fa fa-envelope-open text-primary me-2"></i>booking@hotels.com</p>
              </div>
              <div class="col-md-4">
                <h6 class="section-title text-start text-primary text-uppercase">Technical</h6>
                <p><i class="fa fa-envelope-open text-primary me-2"></i>bookinghotels.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
            <iframe class="position-relative rounded w-100 h-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126419.2565927053!2d128.0199811!3d-3.7047519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce8139135fc2b%3A0x26030bfcc0920512!2sKota%20Ambon%2C%20Maluku!5e0!3m2!1sid!2sid!4v1719999999999!5m2!1sid!2sid"
              frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0"></iframe>
          </div>
          <div class="col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="name" placeholder="Your Name">
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="email" class="form-control" id="email" placeholder="Your Email">
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="subject" placeholder="Subject">
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a message here" id="message"
                        style="height: 150px"></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
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
                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                <button type="button"
                  class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
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
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/waypoints/waypoints.min.js"></script>
  <script src="/lib/counterup/counterup.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/lib/tempusdominus/js/moment.min.js"></script>
  <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="/js-01/main.js"></script>
</body>

</html>