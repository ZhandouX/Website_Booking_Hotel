<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register - Booking Hotels</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css-01/style-login.css">
  <link rel="stylesheet" href="css-01/style.css">
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
  <link href="https://fonts.cdnfonts.com/css/mangifera" rel="stylesheet">
</head>

<body>
  <!-- Loading -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="logo-loading justify-content-center" src="{{ asset('images/header/logo-01.png') }}">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  {{-- Form Register --}}
  <div class="wrapper">
    <form method="POST" action="/register">
      @csrf

      <h2 class="mb-3 text-white font-opensans py-2">Register</h2>

      {{-- Pesan Error --}}
      @if($errors->any())
      <div class="alert alert-danger py-2 px-3 mb-3" role="alert">
        <i class="bi bi-exclamation-circle me-2"></i> {{ $errors->first() }}
      </div>
      @endif

      <div class="input-field">
        <input type="text" name="name" required value="{{ old('name') }}">
        <label>Masukkan Nama</label>
      </div>

      <div class="input-field">
        <input type="email" name="email" required value="{{ old('email') }}">
        <label>Masukkan Email</label>
      </div>

      <div class="input-field">
        <input type="password" name="password" required>
        <label>Masukkan Password</label>
      </div>

      <div class="input-field">
        <input type="password" name="password_confirmation" required>
        <label>Konfirmasi Password</label>
      </div>

      <button type="submit" class="button rounded-3 text-white">Daftar</button>

      <div class="register">
        <p>Sudah punya akun? <a href="/login" class="text-primary font-raleway">Login</a></p>
      </div>
    </form>
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
</body>

</html>
