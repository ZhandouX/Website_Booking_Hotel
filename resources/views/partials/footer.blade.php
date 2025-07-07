<!-- Footer -->
<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <div class="bg-dark rounded p-6">
                    <a href="#" class="logo-ambon mb-2">
                        <img src="{{ asset('images/header/logo-02.png') }}" alt="" />
                    </a>
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
                <p class="mb-2 account fadeInUp"><i class="fa fa-map-marker-alt me-3 account"></i>Booking Hotels, Kota Ambon</p>
                <p class="mb-2 account fadeInUp"><i class="fa fa-phone-alt me-3 account"></i>+62 821-9152-0697</p>
                <p class="mb-2 account fadeInUp"><i class="fa fa-envelope me-3 account"></i>bookinghotels@gmail.com</p>
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
                        <a class="btn btn-link" href="#" data-bs-toggle="modal" data-bs-target="#popupAboutUs">About
                            Us</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal" data-bs-target="#popupContactUs">Contact
                            Us</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#popupPrivacyPolicy">Privacy Policy</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal" data-bs-target="#popupTerms">Terms &
                            Condition</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#popupSupport">Support</a>
                    </div>
                    <div class="col-md-6">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal" data-bs-target="#popupBooking">Pemesanan
                            Hotel</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#popupPayment">Pembayaran Online</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#popupRekomendasi">Rekomendasi Hotel</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal" data-bs-target="#popupCustomer">Layanan
                            Pelanggan</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal" data-bs-target="#popupSecure">Transaksi
                            Aman</a>
                        <a class="btn btn-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#popupKemitraan">Kemitraan Hotel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Booking Hotels</a>, All Right Reserved.
                    Designed By <a class="border-bottom" href="{{ route('about_us.team') }}">Group 3</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#popupCookies">Cookies</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#popupHelpDev">Help</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#popupFAQ">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal About -->
<div class="modal fade" id="popupAboutUs" tabindex="-1" aria-labelledby="popupAboutUsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="popupAboutUsLabel">
                    <i class="fas fa-info-circle me-2"></i>About Us
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 py-4">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <img src="{{ asset('images/about-us/luxury-hotel.jpeg') }}" class="img-fluid rounded shadow"
                            alt="Tentang Kami">
                    </div>
                    <div class="col-md-6">
                        <p class="lead mb-3">
                            Kami adalah platform pemesanan hotel yang terpercaya, menghadirkan kemudahan dalam mencari
                            dan memesan hotel terbaik untuk Anda. Didukung oleh tim profesional dan teknologi terkini.
                        </p>
                        <ul class="mb-3">
                            <li><strong>Didirikan:</strong> 2024</li>
                            <li><strong>Kantor Pusat:</strong> Ambon, Indonesia</li>
                            <li><strong>Misi:</strong> Memberikan pengalaman booking terbaik</li>
                        </ul>
                        <h6 class="fw-bold text-primary mt-4">Visi Kami</h6>
                        <p class="mb-2">Menjadi solusi utama dalam layanan pemesanan hotel yang cepat, aman, dan
                            terpercaya di Indonesia.</p>

                        <h6 class="fw-bold text-primary mt-3">Nilai Perusahaan</h6>
                        <ul class="mb-2">
                            <li>⏱️ Kecepatan & Efisiensi</li>
                            <li>🔒 Keamanan Transaksi</li>
                            <li>🤝 Kepuasan Pelanggan</li>
                            <li>📈 Inovasi Berkelanjutan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Contact -->
<div class="modal fade" id="popupContactUs" tabindex="-1" aria-labelledby="popupContactUsLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="contactModalLabel"><i class="bi bi-headset me-2 text-light"></i>Hubungi Kami</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="container py-3">
                    <div class="text-center mb-5">
                        <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
                        <h1 class="mb-3"><span class="text-primary text-uppercase">Contact</span> For Any Query</h1>
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
                        <div class="col-md-6">
                            <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                frameborder="0" style="min-height: 350px; border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="col-md-6">
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
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
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
                                            <textarea class="form-control" placeholder="Leave a message here"
                                                id="message" style="height: 150px"></textarea>
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
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Privacy Policy --}}
<div class="modal fade" id="popupPrivacyPolicy" tabindex="-1" aria-labelledby="popupPrivacyPolicyLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupPrivacyPolicyLabel">
                    <i class="fas fa-user-shield me-2"></i>Privacy Policy
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="mb-4">
                    Kami menghormati dan menjaga privasi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami
                    mengumpulkan, menggunakan, melindungi, dan membagikan informasi pribadi Anda saat menggunakan
                    layanan kami.
                </p>

                <h6 class="fw-bold text-primary">1. Informasi yang Kami Kumpulkan</h6>
                <ul class="mb-3">
                    <li>Data pribadi: Nama, alamat email, nomor telepon.</li>
                    <li>Informasi transaksi: Detail pemesanan hotel, riwayat pembayaran.</li>
                    <li>Informasi perangkat: IP address, browser, lokasi saat mengakses.</li>
                </ul>

                <h6 class="fw-bold text-primary">2. Bagaimana Kami Menggunakan Informasi Anda</h6>
                <ul class="mb-3">
                    <li>Memproses pemesanan dan transaksi Anda.</li>
                    <li>Meningkatkan layanan dan pengalaman pengguna.</li>
                    <li>Mengirim notifikasi, promo, dan penawaran khusus.</li>
                </ul>

                <h6 class="fw-bold text-primary">3. Perlindungan Data</h6>
                <p class="mb-3">
                    Kami menggunakan teknologi enkripsi dan protokol keamanan terbaru untuk melindungi informasi pribadi
                    Anda dari akses tidak sah.
                </p>

                <h6 class="fw-bold text-primary">4. Pembagian Informasi</h6>
                <p class="mb-3">
                    Kami tidak akan membagikan informasi pribadi Anda kepada pihak ketiga tanpa izin, kecuali diwajibkan
                    oleh hukum atau untuk kepentingan transaksi.
                </p>

                <h6 class="fw-bold text-primary">5. Hak Anda</h6>
                <ul class="mb-3">
                    <li>Anda dapat meminta penghapusan data pribadi Anda kapan saja.</li>
                    <li>Anda dapat meminta akses dan koreksi atas informasi yang kami simpan.</li>
                </ul>

                <h6 class="fw-bold text-primary">6. Perubahan Kebijakan</h6>
                <p>
                    Kami dapat memperbarui kebijakan ini secara berkala. Perubahan akan diinformasikan melalui website
                    kami.
                </p>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4 d-flex justify-content-between flex-wrap gap-2">
                <div>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times-circle me-1"></i> Tutup
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-confirm">
                        <i class="fas fa-check-circle me-1"></i> Setujui
                    </button>
                    <a href="{{ asset('docs/Privacy_Policy.pdf') }}" class="btn btn-primary" target="_blank">
                        <i class="fas fa-file-download me-1"></i> Unduh PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Terms --}}
<div class="modal fade" id="popupTerms" tabindex="-1" aria-labelledby="popupTermsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupTermsLabel"><i class="fas fa-file-contract me-2"></i>Terms & Conditions
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body p-4">
                <p>Dengan menggunakan layanan kami, Anda menyetujui syarat dan ketentuan berikut:</p>
                <ul class="mb-3">
                    <li><strong>Pemesanan:</strong> Semua pemesanan dianggap final setelah pembayaran dikonfirmasi.</li>
                    <li><strong>Pembatalan:</strong> Pembatalan dapat dilakukan dalam waktu 24 jam sebelum check-in.
                    </li>
                    <li><strong>Kebijakan Harga:</strong> Harga dapat berubah sewaktu-waktu tanpa pemberitahuan terlebih
                        dahulu.</li>
                    <li><strong>Tanggung Jawab:</strong> Kami tidak bertanggung jawab atas kesalahan input data oleh
                        pengguna.</li>
                    <li><strong>Kebijakan Penggunaan:</strong> Layanan tidak boleh disalahgunakan untuk tujuan ilegal.
                    </li>
                </ul>
                <p>Harap membaca dengan saksama sebelum menggunakan layanan kami.</p>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4 d-flex justify-content-between">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times-circle me-1"></i> Tutup
                </button>
                <div>
                    <button class="btn btn-success">
                        <i class="fas fa-check me-1"></i> Saya Setuju
                    </button>
                    <a href="{{ asset('docs/terms_conditions.pdf') }}" target="_blank" class="btn btn-primary">
                        <i class="fas fa-file-download me-1"></i> Unduh PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Support --}}
<div class="modal fade" id="popupSupport" tabindex="-1" aria-labelledby="popupSupportLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupSupportLabel"><i class="fas fa-headset me-2"></i>Support</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body p-4">
                <p class="mb-3">Jika Anda memiliki pertanyaan, masalah teknis, atau membutuhkan bantuan, tim support
                    kami siap membantu Anda.</p>

                <h6 class="fw-bold text-primary">Cara Menghubungi Kami</h6>
                <ul class="mb-4">
                    <li>Email: <a href="youanthesuhidonora@gmail.com">support@bookinghotels.id</a></li>
                    <li>Telepon: +62 812-9152-0697</li>
                    <li>Live Chat: Tersedia di pojok kanan bawah situs</li>
                    <li>Waktu Layanan: Senin – Jumat, 08.00 – 17.00 WIT</li>
                </ul>

                <div class="alert alert-info d-flex align-items-center">
                    <i class="fas fa-info-circle me-2"></i>
                    <span>Kami akan membalas email Anda maksimal dalam 1x24 jam.</span>
                </div>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4 d-flex justify-content-between">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times-circle me-1"></i> Tutup
                </button>
                <a href="mailto:support@bookinghotels.id" class="btn btn-primary">
                    <i class="fas fa-envelope me-1"></i> Kirim Email
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Booking --}}
<div class="modal fade" id="popupBooking" tabindex="-1" aria-labelledby="popupBookingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupBookingLabel">
                    <i class="fas fa-calendar-check me-2"></i>Pemesanan Hotel
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <p class="lead">Nikmati kemudahan memesan hotel secara online dengan sistem yang cepat, transparan, dan
                    terpercaya.</p>

                <hr class="my-3">

                <h6 class="fw-bold">Fitur Utama:</h6>
                <ul class="mb-4">
                    <li>🔍 <strong>Pencarian Cerdas:</strong> Temukan hotel berdasarkan lokasi, harga, dan fasilitas.
                    </li>
                    <li>📅 <strong>Booking Real-Time:</strong> Lihat ketersediaan kamar secara langsung.</li>
                    <li>🔒 <strong>Transaksi Aman:</strong> Didukung oleh sistem pembayaran terenkripsi dan Midtrans.
                    </li>
                    <li>📩 <strong>Konfirmasi Instan:</strong> E-mail dan bukti pemesanan langsung dikirimkan.</li>
                    <li>❌ <strong>Pembatalan Mudah:</strong> Pembatalan fleksibel sesuai kebijakan hotel.</li>
                </ul>

                <div class="alert alert-info">
                    <i class="fas fa-lightbulb me-2"></i>
                    Tips: Gunakan filter pencarian untuk menemukan hotel yang paling sesuai dengan kebutuhan dan
                    anggaran Anda.
                </div>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('properties') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-right me-1"></i>Mulai Booking
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Payment --}}
<div class="modal fade" id="popupPayment" tabindex="-1" aria-labelledby="popupPaymentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupPaymentLabel">
                    <i class="fas fa-credit-card me-2"></i>Pembayaran Online
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4 py-3">
                <p class="lead mb-3">
                    Kami mendukung berbagai metode pembayaran digital yang <strong>aman</strong>,
                    <strong>cepat</strong>, dan <strong>fleksibel</strong> sesuai kebutuhan Anda.
                </p>

                <h6 class="fw-bold mb-2"><i class="fas fa-wallet me-2 text-success"></i>Metode Pembayaran yang Tersedia:
                </h6>
                <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                    <img src="{{ asset('images/payments/visa-01.png') }}" alt="Visa" height="40">
                    <img src="{{ asset('images/payments/mastercard-01.png') }}" alt="MasterCard" height="40">
                    <img src="{{ asset('images/payments/bri-01.png') }}" alt="BRI" height="40">
                    <img src="{{ asset('images/payments/bca-01.png') }}" alt="BCA" height="40">
                    <img src="{{ asset('images/payments/mandiri-01.png') }}" alt="Mandiri" height="40">
                    <img src="{{ asset('images/payments/paypal-01.png') }}" alt="PayPal" height="40">
                    <img src="{{ asset('images/payments/indomaret-01.png') }}" alt="Indomaret" height="40">
                    <img src="{{ asset('images/payments/alfamidi-01.png') }}" alt="Alfamidi" height="40">
                </div>

                <h6 class="fw-bold"><i class="fas fa-shield-alt me-2 text-warning"></i>Keamanan Transaksi:</h6>
                <p class="mb-3">
                    Semua transaksi dilindungi dengan <strong>enkripsi SSL</strong> dan sistem pembayaran yang telah
                    tervalidasi. Kami bekerja sama dengan <strong>Midtrans</strong> sebagai payment gateway terpercaya.
                </p>

                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i>
                    Tips: Simpan bukti pembayaran Anda untuk referensi di kemudian hari. Anda juga akan menerima
                    konfirmasi melalui email.
                </div>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('properties') }}" class="btn btn-primary">
                    <i class="fas fa-money-check-alt me-1"></i>Lanjut ke Pembayaran
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Rekomendasi --}}
<div class="modal fade" id="popupRekomendasi" tabindex="-1" aria-labelledby="popupRekomendasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupRekomendasiLabel">
                    <i class="fas fa-star me-2"></i>Rekomendasi Hotel
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4 py-3">
                <p class="lead">Kami telah memilih beberapa hotel terbaik berdasarkan rating, fasilitas, dan ulasan
                    pelanggan:</p>

                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="border rounded-3 p-3 h-100 shadow-sm">
                            <h6 class="fw-bold mb-1"><i class="fas fa-hotel me-2 text-warning"></i>Hotel Ambon View</h6>
                            <p class="small mb-1">Pemandangan laut & dekat pusat kota.</p>
                            <span class="badge bg-success">4.7 ★</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded-3 p-3 h-100 shadow-sm">
                            <h6 class="fw-bold mb-1"><i class="fas fa-utensils me-2 text-danger"></i>Maluku Grand Hotel
                            </h6>
                            <p class="small mb-1">Layanan eksklusif & restoran bintang 5.</p>
                            <span class="badge bg-success">4.9 ★</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded-3 p-3 h-100 shadow-sm">
                            <h6 class="fw-bold mb-1"><i class="fas fa-umbrella-beach me-2 text-info"></i>Haruku Resort
                            </h6>
                            <p class="small mb-1">Dekat pantai, cocok untuk liburan keluarga.</p>
                            <span class="badge bg-success">4.6 ★</span>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <p>
                    Gunakan fitur <strong>Pencarian Hotel</strong> kami untuk filter berdasarkan lokasi, harga, dan
                    fasilitas seperti Wi-Fi, kolam renang, atau sarapan gratis.
                </p>

                <div class="alert alert-info d-flex align-items-center">
                    <i class="fas fa-lightbulb me-2"></i>
                    Rekomendasi diperbarui setiap minggu berdasarkan data terbaru dan preferensi pengguna.
                </div>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('properties') }}" class="btn btn-primary">
                    <i class="fas fa-search me-1"></i>Cari Hotel Lainnya
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Customer --}}
<div class="modal fade" id="popupCustomer" tabindex="-1" aria-labelledby="popupCustomerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupCustomerLabel">
                    <i class="fas fa-headset me-2"></i>Layanan Pelanggan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <p class="lead">
                    Tim layanan pelanggan kami siap membantu Anda secara <strong>ramah</strong>, <strong>cepat</strong>,
                    dan <strong>profesional</strong> setiap saat.
                </p>

                <hr>

                <h6 class="fw-bold"><i class="fas fa-clock me-2 text-warning"></i>Jam Operasional:</h6>
                <ul class="mb-3">
                    <li>Senin - Jumat: 08.00 - 22.00</li>
                    <li>Sabtu - Minggu & Hari Libur: 09.00 - 18.00</li>
                </ul>

                <h6 class="fw-bold"><i class="fas fa-phone-alt me-2 text-success"></i>Kontak:</h6>
                <ul class="mb-3">
                    <li>📞 Telepon: +62 812-9152-0697</li>
                    <li>📧 Email: support@bookinghotels.com</li>
                    <li>💬 Live Chat: Tersedia 24/7 di sudut kanan bawah website</li>
                </ul>

                <h6 class="fw-bold"><i class="fas fa-check-circle me-2 text-info"></i>Layanan yang Kami Tawarkan:</h6>
                <ul>
                    <li>Pertanyaan seputar pemesanan & pembayaran</li>
                    <li>Bantuan teknis dan kendala login</li>
                    <li>Pengajuan refund atau pembatalan</li>
                    <li>Konsultasi dan rekomendasi hotel</li>
                </ul>

                <div class="alert alert-info mt-4 d-flex align-items-center">
                    <i class="fas fa-info-circle me-2"></i>
                    Kami selalu berkomitmen untuk memberikan solusi terbaik secepat mungkin.
                </div>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('about_us.about') }}" class="btn btn-primary">
                    <i class="fas fa-envelope me-1"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Secure --}}
<div class="modal fade" id="popupSecure" tabindex="-1" aria-labelledby="popupSecureLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupSecureLabel">
                    <i class="fas fa-shield-alt me-2"></i>Transaksi Aman
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <p class="lead">
                    Keamanan Anda adalah prioritas kami. Setiap transaksi dilakukan dengan standar perlindungan data
                    yang tinggi dan sistem anti-penipuan terbaru.
                </p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-lock text-success me-2"></i>
                                <strong>Enkripsi SSL 256-bit:</strong> Melindungi setiap informasi pribadi Anda.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-fingerprint text-info me-2"></i>
                                <strong>Autentikasi Ganda:</strong> Menjamin keamanan saat login dan transaksi.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <strong>Verifikasi Pembayaran:</strong> Semua pembayaran diverifikasi melalui Midtrans.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-user-shield text-warning me-2"></i>
                                <strong>Proteksi Data Pribadi:</strong> Sesuai standar GDPR dan kebijakan privasi.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/secure-payment.png') }}" alt="Secure Payment"
                            class="img-fluid rounded" style="max-height: 220px;">
                        <p class="text-muted small mt-2">Didukung oleh sistem keamanan kelas dunia</p>
                    </div>
                </div>

                <div class="alert alert-success mt-4 d-flex align-items-center">
                    <i class="fas fa-thumbs-up me-2"></i>
                    Anda dapat bertransaksi dengan tenang kapan pun dan di mana pun.
                </div>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('about_us.service') }}" class="btn btn-outline-primary">
                    <i class="fas fa-book me-1"></i>Pelajari Kebijakan Privasi
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Kemitraan --}}
<div class="modal fade" id="popupKemitraan" tabindex="-1" aria-labelledby="popupKemitraanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupKemitraanLabel">
                    <i class="fas fa-handshake me-2"></i>Kemitraan Hotel
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <p class="lead">
                    Bergabunglah bersama platform kami sebagai mitra hotel terpercaya dan nikmati berbagai keuntungan
                    eksklusif.
                </p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-chart-line text-success me-2"></i>
                                <strong>Promosi Luas:</strong> Hotel Anda akan tampil di berbagai kanal digital kami.
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-user-tie text-primary me-2"></i>
                                <strong>Dukungan Manajemen:</strong> Tim kami akan membantu Anda mengelola ketersediaan
                                kamar dan strategi harga.
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-laptop-code text-warning me-2"></i>
                                <strong>Dashboard Mitra:</strong> Pantau statistik dan pemesanan secara real-time.
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-headset text-info me-2"></i>
                                <strong>Layanan Bantuan 24/7:</strong> Kami siap membantu kapan pun dibutuhkan.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/partner-hotel.png') }}" alt="Kemitraan Hotel"
                            class="img-fluid rounded shadow-sm" style="max-height: 240px;">
                        <p class="text-muted small mt-2">Bangun kolaborasi untuk kemajuan bersama</p>
                    </div>
                </div>

                <div class="alert alert-primary mt-4 d-flex align-items-center">
                    <i class="fas fa-bullhorn me-2"></i>
                    Tertarik bermitra? Hubungi tim kemitraan kami atau isi formulir pendaftaran.
                </div>
            </div>
            <div class="modal-footer bg-light border-0 rounded-bottom-4">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('about_us.contact') }}" class="btn btn-outline-primary">
                    <i class="fas fa-envelope-open me-1"></i>Hubungi Kami
                </a>
                <a href="{{ route('about_us.contact') }}" class="btn btn-primary">
                    <i class="fas fa-edit me-1"></i>Daftar Sebagai Mitra
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Modal Cookies --}}
<div class="modal fade" id="popupCookies" tabindex="-1" aria-labelledby="popupCookiesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupCookiesLabel"><i class="fas fa-cookie-bite me-2"></i>Kebijakan Cookies
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <p>Kami menggunakan cookies untuk meningkatkan pengalaman Anda di situs ini, menyimpan preferensi, dan
                    menganalisis penggunaan halaman.</p>
                <ul class="list-unstyled mt-3">
                    <li><i class="fas fa-check-circle text-success me-2"></i>Menyimpan preferensi pengguna</li>
                    <li><i class="fas fa-chart-bar text-primary me-2"></i>Analisis lalu lintas pengunjung</li>
                    <li><i class="fas fa-lock text-warning me-2"></i>Tidak membagikan data ke pihak ketiga</li>
                </ul>
                <div class="alert alert-info mt-4">
                    Anda dapat mengatur penggunaan cookies kapan saja melalui pengaturan browser.
                </div>
            </div>
            <div class="modal-footer bg-light rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button class="btn btn-primary"><i class="fas fa-check me-1"></i> Saya Mengerti</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Help -->
<div class="modal fade" id="popupHelpDev" tabindex="-1" aria-labelledby="popupHelpDevLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupHelpDevLabel">
                    <i class="bi bi-question-circle me-2"></i>Pusat Bantuan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>

            <div class="modal-body">
                <h6><i class="bi bi-bookmark-fill me-1 text-primary"></i>Cara Melakukan Pemesanan</h6>
                <p class="text-muted">
                    1. Pilih kamar yang tersedia<br>
                    2. Klik tombol "Pesan Sekarang"<br>
                    3. Isi data pemesan dengan lengkap<br>
                    4. Lakukan pembayaran sesuai instruksi<br>
                    5. Cek email untuk konfirmasi pemesanan
                </p>

                <h6><i class="bi bi-credit-card-2-back me-1 text-primary"></i>Pembayaran</h6>
                <p class="text-muted">
                    Kami menerima pembayaran melalui transfer bank, e-wallet, dan kartu kredit. Pastikan Anda menyimpan
                    bukti pembayaran.
                </p>

                <h6><i class="bi bi-headset me-1 text-primary"></i>Kontak Bantuan</h6>
                <p class="text-muted">
                    Jika mengalami kesulitan, hubungi kami di:<br>
                    📞 0812-3456-7890<br>
                    📧 support@hotelkita.com
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal FAQ --}}
<div class="modal fade" id="popupFAQ" tabindex="-1" aria-labelledby="popupFAQLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-light" id="popupFAQLabel"><i class="fas fa-question-circle me-2"></i>FAQ - Pertanyaan
                    Umum</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                Bagaimana cara memesan kamar?
                            </button>
                        </h2>
                        <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne">
                            <div class="accordion-body">
                                Cukup pilih hotel yang Anda inginkan, isi form pemesanan, lalu lakukan pembayaran
                                melalui metode yang tersedia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                Apakah pembayaran aman?
                            </button>
                        </h2>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo">
                            <div class="accordion-body">
                                Ya, semua transaksi diproses dengan sistem keamanan berstandar tinggi melalui Midtrans.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapseThree" aria-expanded="false"
                                aria-controls="faqCollapseThree">
                                Bagaimana jika saya ingin membatalkan pemesanan?
                            </button>
                        </h2>
                        <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree">
                            <div class="accordion-body">
                                Anda dapat menghubungi layanan pelanggan kami untuk pembatalan dan ketentuan refund.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light rounded-bottom-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Chatbot -->
<div class="modal fade" id="popupHelp" tabindex="-1" aria-labelledby="popupHelpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title font-opensans text-dark"><i class="fas fa-robot me-2"></i>AI Chat Assistant</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div id="chatbox" class="chat-box mb-3">
                    <div class="bot-message rounded-ai">Asisten AI siap membantu Anda!</div>
                </div>
                <div class="chat-input-container">
                    <input type="text" id="chatInput" class="form-control rounded-ai" placeholder="Tulis pesan..." />
                    <button class="btn btn-warning ms-2" id="sendBtn">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const chatBox = document.getElementById("chatbox");
    const chatInput = document.getElementById("chatInput");
    const sendBtn = document.getElementById("sendBtn");

    // Kirim saat klik tombol atau tekan Enter
    sendBtn.addEventListener("click", sendMessage);
    chatInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") {
            e.preventDefault();
            sendMessage();
        }
    });

    async function sendMessage() {
        const message = chatInput.value.trim();
        if (!message) return;

        // Buat elemen pesan user
        const userMsg = document.createElement("div");
        userMsg.className = "user-message";
        userMsg.textContent = message;
        chatBox.appendChild(userMsg);

        chatInput.value = "";
        chatBox.scrollTop = chatBox.scrollHeight;

        try {
            const response = await fetch("/api/chat", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ message }),
            });

            const data = await response.json();
            const reply = data.reply || "Maaf, tidak ada jawaban.";

            const botMsg = document.createElement("div");
            botMsg.className = "bot-message";
            botMsg.textContent = reply;
            chatBox.appendChild(botMsg);

            chatBox.scrollTop = chatBox.scrollHeight;
        } catch (error) {
            console.error("Error:", error);

            const errorMsg = document.createElement("div");
            errorMsg.className = "bot-message";
            errorMsg.textContent = "⚠️ Terjadi kesalahan saat menghubungi AI.";
            chatBox.appendChild(errorMsg);
        }
    }
</script>


{{-- Modal AI Chat Bot --}}
<a href="#" class="btn btn-lg btn-warning btn-lg-square shadow-lg position-fixed"
    style="bottom: 20px; right: 20px; z-index: 1050;" data-bs-toggle="modal" data-bs-target="#popupHelp"
    title="Buka Chat AI">
    <i class="bi bi-chat-dots fs-4"></i>
</a>