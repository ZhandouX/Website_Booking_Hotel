<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Akun Anda</h6>
            <h1 class="mb-5"><span class="text-primary text-uppercase">Profil</span> Pengguna</h1>
        </div>

        <div class="row justify-content-center g-4">
            <div class="col-lg-8">
                <div class="row gy-4 justify-content-center text-center">
                    <div class="col-md-5">
                        <div class="bg-light rounded p-4">
                            <h6 class="section-title text-start text-primary text-uppercase">Informasi Login</h6>
                            <p><i class="fa fa-user text-primary me-2"></i> {{ Session::get('user')['name'] }}</p>
                            <p><i class="fa fa-envelope text-primary me-2"></i> {{ Session::get('user')['email'] }}</p>
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger mt-2 w-100" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="bg-light p-4 rounded">
                            <h4 class="mb-4">Edit Profil Anda</h4>
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form action="{{ url('/profile/update') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control" id="name"
                                                value="{{ Session::get('user')['name'] }}" required>
                                            <label for="name">Nama Anda</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control" id="password">
                                            <label for="password">Password Baru (Opsional)</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-2" type="submit">Simpan
                                            Perubahan</button>
                                    </div>
                                </div>
                            </form>
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary mt-3 w-100">← Kembali ke
                                Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>