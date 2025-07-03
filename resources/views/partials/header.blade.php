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
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            {{-- Navbar --}}
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 text-center">
                <a href="{{ route('dashboard') }}" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-primary font-mangifera-m">Booking Hotels</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('dashboard') }}"
                            class="nav-item nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('properties') }}"
                            class="nav-item nav-link {{ request()->routeIs('properties') ? 'active' : '' }}">Hotel
                            List</a>

                        <div class="nav-item dropdown {{ request()->is('about-us.*') ? 'active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('about_us.team') }}"
                                    class="dropdown-item {{ request()->routeIs('about_us.team') ? 'active' : '' }}">Our Team</a>
                                <a href="{{ route('about_us.about') }}"
                                    class="dropdown-item {{ request()->routeIs('about_us.about') ? 'active' : '' }}">About</a>
                                <a href="{{ route('about_us.service') }}"
                                    class="dropdown-item {{ request()->routeIs('about_us.service') ? 'active' : '' }}">Services</a>
                                <a href="{{ route('about_us.contact') }}"
                                    class="dropdown-item {{ request()->routeIs('about_us.contact') ? 'active' : '' }}">Contact</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown {{ request()->routeIs('profile') ? 'active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('profile') }}"
                                    class="dropdown-item {{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a>
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