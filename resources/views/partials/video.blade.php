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