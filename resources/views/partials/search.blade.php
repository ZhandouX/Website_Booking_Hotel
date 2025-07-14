{{-- resources/views/partials/search.blade.php --}}
<div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-white shadow" style="padding: 40px">
            <div class="row g-2 justify-content-center">
                <div class="col-md-13">
                    <div class="row g-2 justify-content-center">
                        <div class="col-md-3">
                            <input type="text" id="namaHotel" class="form-control" placeholder="Nama Hotel">
                        </div>
                        <div class="col-md-3">
                            <select id="lokasiHotel" class="form-select">
                                <option selected value="">Pilih Lokasi</option>
                                <option value="Teluk Ambon">Teluk Ambon</option>
                                <option value="Sirimau">Sirimau</option>
                                <option value="Nusaniwe">Nusaniwe</option>
                                <option value="Baguala">Baguala</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="bintangHotel" class="form-select">
                                <option selected value="">Pilih Bintang</option>
                                <option value="1">⭐</option>
                                <option value="2">⭐⭐</option>
                                <option value="3">⭐⭐⭐</option>
                                <option value="4">⭐⭐⭐⭐</option>
                                <option value="5">⭐⭐⭐⭐⭐</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="kategoriHotel" class="form-select">
                                <option selected value="">Pilih Kategori</option>
                                <option value="hotel">Hotel</option>
                                <option value="penginapan">Penginapan</option>
                                <option value="apartemen">Apartemen</option>
                                <option value="villa">Villa</option>
                            </select>
                        </div>
                        <div class="container-fluid">
                            <button id="btnCari" onclick="cariHotel()" class="btn btn-primary w-100">
                                <span id="textCari"><i class="fa fa-search me-2"></i>Cari</span>
                                <span id="loadingCari" class="spinner-border spinner-border-sm d-none"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
