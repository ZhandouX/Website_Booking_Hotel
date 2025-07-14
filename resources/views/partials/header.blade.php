<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- Spinner --}}
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img class="logo-loading" src="{{ asset('images/header/logo-01.png') }}">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

{{-- Header --}}
<div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="{{ route('dashboard') }}"
                class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center logo-ambon">
                <img src="{{ asset('images/header/logo-02.png') }}" alt="">
            </a>
        </div>
        <div class="col-lg-9">
            {{-- Topbar --}}


            {{-- Navbar --}}
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 text-center">
                <a href="{{ route('dashboard') }}" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-primary font-mangifera-m">Booking Hotels</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('dashboard') }}"
                            class="nav-item nav-link {{ request()->routeIs('/') ? 'active' : '' }}">Beranda</a>
                        <a href="{{ route('properties') }}"
                            class="nav-item nav-link {{ request()->routeIs('properties') ? 'active' : '' }}">Daftar
                            Hotel</a>

                        <a href="{{ route('about_us.team') }}"
                            class="nav-item nav-link {{ request()->routeIs('about_us.team') ? 'active' : '' }}">Tim
                            Pengembang</a>
                        <a href="{{ route('about_us.contact') }}"
                            class="nav-item nav-link {{ request()->routeIs('about_us.contact') ? 'active' : '' }}">Kontak</a>



                        @if (Session::has('user'))
                            @php
                                $user = Session::get('user');
                            @endphp

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                    id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- Foto profil -->
                                    <img src="{{ asset('skydash/src/assets/images/faces/face28.jpg') }}" alt="profile"
                                        style="width: 35px; height: 35px; border-radius: 50%;">
                                    <!-- Nama -->
                                    <span
                                        class="ms-2 d-none d-lg-inline text-black">{{ $user['name'] ?? 'Pengguna' }}</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            <i class="ti-user text-primary me-2"></i> Profil
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="ti-power-off text-danger me-2"></i> Keluar
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                            </li>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
