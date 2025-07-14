<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">

                    <div class="text-center mb-5">
                        <h2 class="text-primary">Profil Pengguna</h2>
                        <p class="text-muted">Kelola informasi akun Anda</p>
                    </div>

                    <div class="row g-5">
                        <!-- Kiri: Info Profil -->
                        <div class="col-md-5 text-center">
                            <div class="mb-3">
                                @php
                                    $user = Session::get('user');
                                    $profilePath = $user['profile_photo'] ?? null;
                                    $hasProfile = $profilePath && file_exists(public_path('storage/' . $profilePath));
                                @endphp

                                @if ($hasProfile)
                                    <img src="{{ asset('storage/' . $profilePath) }}" alt="Foto Profil"
                                        class="rounded-circle shadow"
                                        style="width: 140px; height: 140px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('/skydash/src/assets/images/faces/face28.jpg') }}" alt="Default"
                                        class="rounded-circle shadow"
                                        style="width: 140px; height: 140px; object-fit: cover;">
                                @endif
                            </div>

                            <h5>{{ $user['name'] }}</h5>
                            <p class="text-muted mb-3">{{ $user['email'] }}</p>

                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-outline-danger w-100" type="submit">Keluar</button>
                            </form>
                        </div>

                        <!-- Kanan: Form Edit -->
                        <div class="col-md-7">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form action="{{ url('/profile/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Nama -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ old('name', $user['name'] ?? '') }}" required>
                                    <label for="name">Nama</label>
                                </div>

                                <!-- Password Baru -->
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password baru">
                                    <label for="password">Password Baru (Opsional)</label>
                                </div>

                                <!-- Gambar Profil -->
                                <div class="mb-3">
                                    <label for="profile_photo" class="form-label">Gambar Profil (Opsional)</label>
                                    <input class="form-control" type="file" name="profile_photo" id="profile_photo"
                                        accept="image/*">
                                </div>

                                <!-- Tombol Simpan -->
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                                    <a href="{{ url('/') }}" class="btn btn-link mt-2">← Kembali ke Dashboard</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
