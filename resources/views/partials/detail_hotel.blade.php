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
                        <img id="gambar-2" class="img-fluid rounded w-100"
                            style="height: 185px; width: object-fit: cover;" alt="Gambar 2">
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
            <a href="{{ route('daftar_kamar') }}" class="btn btn-primary rounded-3 px-4 py-2 fw-semibold">Pilih
                Kamar</a>
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

<!-- Informasi Lengkap Hotel -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center mb-5 text-primary fw-bold">🛎️ Informasi Lengkap Hotel</h2>

                <div class="accordion shadow-sm rounded-3" id="hotelDetailsAccordion">

                    <!-- Template Accordion Item -->
                    <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="headingFasilitas">
                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFasilitas" aria-expanded="true" aria-controls="collapseFasilitas">
                                🏨 <span class="ms-2">Fasilitas Hotel</span>
                            </button>
                        </h2>
                        <div id="collapseFasilitas" class="accordion-collapse collapse show"
                            aria-labelledby="headingFasilitas" data-bs-parent="#hotelDetailsAccordion">
                            <div class="accordion-body" id="deskripsi-fasilitas">
                                <!-- Diisi dinamis -->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="headingLokasi">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseLokasi" aria-expanded="false" aria-controls="collapseLokasi">
                                📍 <span class="ms-2">Lokasi Strategis</span>
                            </button>
                        </h2>
                        <div id="collapseLokasi" class="accordion-collapse collapse"
                            aria-labelledby="headingLokasi" data-bs-parent="#hotelDetailsAccordion">
                            <div class="accordion-body" id="deskripsi-lokasi"></div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="headingAlasan">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseAlasan" aria-expanded="false" aria-controls="collapseAlasan">
                                ⭐ <span class="ms-2">Alasan Memilih Hotel Ini</span>
                            </button>
                        </h2>
                        <div id="collapseAlasan" class="accordion-collapse collapse"
                            aria-labelledby="headingAlasan" data-bs-parent="#hotelDetailsAccordion">
                            <div class="accordion-body" id="alasan"></div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="headingKamar">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseKamar" aria-expanded="false" aria-controls="collapseKamar">
                                🛏️ <span class="ms-2">Tipe Kamar</span>
                            </button>
                        </h2>
                        <div id="collapseKamar" class="accordion-collapse collapse"
                            aria-labelledby="headingKamar" data-bs-parent="#hotelDetailsAccordion">
                            <div class="accordion-body">
                                <ul id="tipe-kamar" class="list-unstyled small ps-3"></ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="headingKebijakan">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseKebijakan" aria-expanded="false" aria-controls="collapseKebijakan">
                                📋 <span class="ms-2">Kebijakan Hotel</span>
                            </button>
                        </h2>
                        <div id="collapseKebijakan" class="accordion-collapse collapse"
                            aria-labelledby="headingKebijakan" data-bs-parent="#hotelDetailsAccordion">
                            <div class="accordion-body">
                                <ul id="kebijakan-hotel" class="list-unstyled small ps-3"></ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="headingUlasan">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseUlasan" aria-expanded="false" aria-controls="collapseUlasan">
                                💬 <span class="ms-2">Ulasan Tamu</span>
                            </button>
                        </h2>
                        <div id="collapseUlasan" class="accordion-collapse collapse"
                            aria-labelledby="headingUlasan" data-bs-parent="#hotelDetailsAccordion">
                            <div class="accordion-body" id="ulasan-tamu">
                                <!-- Ulasan dari JSON -->
                            </div>

                            <!-- Form Ulasan -->
                            <div class="card shadow-sm mt-4 border-0">
                                <div class="card-body">
                                    <h5 class="card-title">Tinggalkan Ulasan Anda</h5>
                                    <form id="form-ulasan">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="pesan" class="form-label">Pesan/Ulasan</label>
                                                <textarea class="form-control" id="pesan" rows="4" required></textarea>
                                            </div>
                                            <div class="col-12 text-end">
                                                <button type="submit" class="btn btn-primary px-4">
                                                    Kirim Ulasan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end accordion -->
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