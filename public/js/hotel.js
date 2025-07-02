let allHotels = [];
  let currentPage = 1;
  const hotelsPerPage = 6;
  let iso;

  function renderHotels(page, filter = '*') {
    const container = document.getElementById('hotel-list');
    
    // Tambahkan efek fade out
    container.classList.remove('show');
    container.classList.add('fade');

    setTimeout(() => {
      container.innerHTML = '';

      const filteredHotels = filter === '*' ? allHotels : allHotels.filter(h => `.${h.kategori}` === filter);
      const startIndex = (page - 1) * hotelsPerPage;
      const endIndex = startIndex + hotelsPerPage;
      const hotelsToShow = filteredHotels.slice(startIndex, endIndex);

      if (hotelsToShow.length === 0) {
        container.innerHTML = '<div class="col-12 text-center"><p>Data tidak ditemukan</p></div>';
      } else {
        hotelsToShow.forEach(hotel => {
          const fasilitasList = hotel.fasilitas?.map(f => `<span class="category">${f}</span>`).join(" ") || '';
          const kategoriClass = hotel.kategori ? hotel.kategori.toLowerCase() : ''; // digunakan untuk filter
          const kategoriRating = hotel.kategoriRating || 'Tidak tersedia';

          container.innerHTML += `
            <div class="col-lg-12 col-md-12 align-self-center mb-30 properties-items ${kategoriClass}">
              <div class="item d-flex justify-content-between align-items-start" style="gap: 20px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                
                <a href="{{ route('detail_hotel') }}?id=${hotel.id}"><img src="${hotel.gambar}" alt="" style="width: 200px; height: 140px; border-radius: 10px; object-fit: cover;"></a>

                <div class="info flex-fill">
                  <h4 style="margin-bottom: 5px;">${hotel.nama}</h4>
                  <a class="truncate" href="${hotel.lokasi}" target="_blank">
                    <i class="fa fa-map-marker"></i> ${hotel.alamat}
                  </a>
                  <p style="margin-bottom: 5px;"> ${hotel.rating} - ${kategoriRating}</p>
                  <div class="mb-2">${fasilitasList}</div>
                  <p class="truncate" style="font-size: 13px; color: #555;">${hotel.ulasan}</p>
                </div>

                <div style="text-align: right; min-width: 140px;">
                  <p style="color: #d35400; font-weight: 600; font-size: 18px;">${hotel.harga}</p>
                  <p style="font-size: 12px; color: #f43f5e;">${hotel.pemesanan || ''}</p>
                  <a href="{{ route('detail_hotel') }}?id=${hotel.id}" class="btn btn-primary btn-sm rounded-pill mt-2">Pilih Kamar</a>
                </div>
              </div>
            </div>
          `;
        });
      }

      // Fade in
      setTimeout(() => {
        container.classList.remove('fade');
        container.classList.add('show');
      }, 10);

      if (iso) {
        iso.reloadItems();
        iso.arrange();
      }
    }, 300);
  }

  function renderPagination(filter = '*') {
    const paginationContainer = document.querySelector('.pagination');
    const filteredHotels = filter === '*' ? allHotels : allHotels.filter(h => `.${h.kategori}` === filter);
    const totalPages = Math.ceil(filteredHotels.length / hotelsPerPage);

    paginationContainer.innerHTML = '';
    for (let i = 1; i <= totalPages; i++) {
      paginationContainer.innerHTML += `<li><a href="#" class="${i === currentPage ? 'is_active' : ''}" data-page="${i}">${i}</a></li>`;
    }
    if (currentPage < totalPages) {
      paginationContainer.innerHTML += `<li><a href="#" data-page="next">>></a></li>`;
    }
  }

  document.addEventListener('click', function (e) {
    if (e.target.closest('.pagination a')) {
      e.preventDefault();
      const page = e.target.getAttribute('data-page');
      const activeFilter = document.querySelector('.properties-filter a.is_active').getAttribute('data-filter');

      if (page === 'next') {
        currentPage++;
      } else {
        currentPage = parseInt(page);
      }
      renderHotels(currentPage, activeFilter);
      renderPagination(activeFilter);
    }
  });

  document.querySelectorAll('.properties-filter a').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const filter = this.getAttribute('data-filter');

      document.querySelectorAll('.properties-filter a').forEach(el => el.classList.remove('is_active'));
      this.classList.add('is_active');

      currentPage = 1;
      renderHotels(currentPage, filter);
      renderPagination(filter);
    });
  });

  fetch('data/hotel.json')
    .then(response => response.json())
    .then(data => {
      allHotels = data;
      renderHotels(currentPage);
      renderPagination();

      iso = new Isotope('#hotel-list', {
        itemSelector: '.properties-items',
        layoutMode: 'fitRows'
      });
    })
    .catch(error => console.error('Gagal memuat data hotel:', error));