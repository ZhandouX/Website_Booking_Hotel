<!-- Video -->
<div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s" id="daftar-hotel">
    <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5">
                <h6 class="section-title text-start text-white text-uppercase mb-3">Daftar Hotel</h6>
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
                <button class="btn btn-light py-md-3 px-md-5" data-bs-toggle="modal" data-bs-target="#contactModal">
                    Hubungi Kami
                </button>
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

<!-- Modal Contact -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="contactModalLabel">Hubungi Kami</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
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
                frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
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
                      <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
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
