<!-- Form Pemesanan -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Pesan Kamar </h6>
            <h1 class="mb-5">Nikmati Kemewahan  <span class="text-primary text-uppercase">Pesan Sekarang</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg"
                            style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>

            <!-- Form Booking -->
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form id="formBooking">
                        <div class="row g-3 booking-form">
                            <p>Tipe Kamar: <strong id="tipeKamar"></strong></p>
                            <p>Harga per Kamar: <strong>Rp<span id="hargaKamar"></span></strong></p>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="namaPemesan" placeholder="Nama Pemesan"
                                        required>
                                    <label for="namaPemesan">Nama Pemesan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="emailPemesan" placeholder="Email"
                                        required>
                                    <label for="emailPemesan">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="hpPemesan" placeholder="Nomor HP"
                                        required>
                                    <label for="hpPemesan">Nomor HP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="jumlahKamar"
                                        placeholder="Jumlah Kamar" min="1" value="1" required>
                                    <label for="jumlahKamar">Jumlah Kamar</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="jumlahDewasa"
                                        placeholder="Jumlah Dewasa" min="1" value="1" required>
                                    <label for="jumlahDewasa">Jumlah Dewasa</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="jumlahAnak"
                                        placeholder="Jumlah Anak-anak" min="0" value="0" required>
                                    <label for="jumlahAnak">Jumlah Anak-anak</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="tanggalCheckin" placeholder="Check-in"
                                        required>
                                    <label for="tanggalCheckin">Tanggal Check-in</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="fw-bold fs-5 mt-3">Total Bayar: Rp<span id="totalBayar">0</span></p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 rounded-3" type="submit">Bayar
                                    Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>