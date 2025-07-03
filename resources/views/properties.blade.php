@extends('layouts.app')

@section('title', 'List Hotel')

@section('content')
    @include('partials.page-header', [
        'title' => 'Booking Hotels',
        'breadcrumb' => 'List Hotel'
    ])

  {{-- Pencarian --}}
  @include('partials.search')

  <!-- List Hotels -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title text-center text-primary text-uppercase">Hotels</h6>
          <h1 class="mb-5">Daftar <span class="text-primary text-uppercase">Hotel</span></h1>
        </div>
        <div class="row g-4" id="hotel-list">
        </div>
      </div>
    </div>

    <!-- Pagination -->
    <ul class="pagination mt-4 justify-content-center">
    </ul>

  {{-- Welcome Section --}}
  @include('partials.testimonials')

  {{-- Newsletter --}}
  @include('partials.newsletter')

  {{-- Newsletter --}}
@endsection

@push('scripts')
  <!-- Javascript Detail Hotel -->
  <script>
    let allHotels = [];
    let currentPage = 1;
    const hotelsPerPage = 6;
    let iso;

    function generateStars(rating) {
      let stars = '';
      const rate = Math.round(parseFloat(rating));
      for (let i = 1; i <= 5; i++) {
        stars += `<small class="fa fa-star ${i <= rate ? 'text-primary' : 'text-muted'}"></small>`;
      }
      return stars;
    }

    function generateFasilitas(fasilitas) {
      return fasilitas.map(f => {
        let icon = '';
        if (f.toLowerCase().includes("wifi")) icon = "fa-wifi";
        else if (f.toLowerCase().includes("bed")) icon = "fa-bed";
        else if (f.toLowerCase().includes("bath")) icon = "fa-bath";
        else icon = "fa-check-circle";
        return `<small class="border-end me-3 pe-3"><i class="fa ${icon} text-primary me-2"></i>${f}</small>`;
      }).join('');
    }

    function renderHotels(page) {
      const container = document.getElementById('hotel-list');
      container.classList.remove('show');
      container.classList.add('fade');

      setTimeout(() => {
        container.innerHTML = '';

        // tanpa filter kategori
        const startIndex = (page - 1) * hotelsPerPage;
        const endIndex = startIndex + hotelsPerPage;
        const hotelsToShow = allHotels.slice(startIndex, endIndex);

        if (hotelsToShow.length === 0) {
          container.innerHTML = '<div class="col-12 text-center"><p>Data tidak ditemukan</p></div>';
        } else {
          hotelsToShow.forEach(hotel => {
            const fasilitasHTML = generateFasilitas(hotel.fasilitas || []);
            const bintangHTML = generateStars(hotel.rating || 0);

            container.innerHTML += `
          <div class="col-lg-4 col-md-6 wow fadeInUp room-item" data-wow-delay="0.1s">
            <div class="shadow rounded overflow-hidden">
              <div class="position-relative">
                <img class="img-fluid" src="${hotel.gambar}" alt="${hotel.nama}" style="height: 300px;">
                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">${hotel.harga} / kamar</small>
              </div>
              <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3 hotel-title-rating">
                  <h5 class="mb-0 text-truncate-1 hotel-title">${hotel.nama}</h5>
                  <div class="rating-stars ps-2">${hotel.rating}</div>
                </div>
                <div class="d-flex mb-3 text-truncate-1">
                  ${fasilitasHTML}
                </div>
                <p class="text-body mb-3 text-truncate-2">${hotel.ulasan || ''}</p>
                <div class="d-flex justify-content-between">
                  <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('detail_hotel') }}?id=${hotel.id}">Detail</a>
                  <a class="btn btn-sm btn-danger rounded py-2 px-4" href="{{ route('daftar_kamar') }}?id=${hotel.id}">Pilih Kamar</a>
                </div>
              </div>
            </div>
          </div>
        `;
          });
        }

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

    function renderPagination() {
      const paginationContainer = document.querySelector('.pagination');
      const totalPages = Math.ceil(allHotels.length / hotelsPerPage);

      paginationContainer.innerHTML = '';
      for (let i = 1; i <= totalPages; i++) {
        paginationContainer.innerHTML += `
      <li class="page-btn ${i === currentPage ? 'is_active' : ''}">
        <a href="#" data-page="${i}">
          <span>${i}</span>
        </a>
      </li>
    `;
      }

      if (currentPage < totalPages) {
        paginationContainer.innerHTML += `
      <li class="page-btn">
        <a href="#" data-page="next">
          <i class="fa fa-angle-double-right"></i>
        </a>
      </li>
    `;
      }
    }

    function renderPagination() {
      const paginationContainer = document.querySelector('.pagination');
      const totalPages = Math.ceil(allHotels.length / hotelsPerPage);

      paginationContainer.innerHTML = '';
      for (let i = 1; i <= totalPages; i++) {
        paginationContainer.innerHTML += `
      <li class="page-btn ${i === currentPage ? 'is_active' : ''}">
        <a href="#" data-page="${i}">
          ${i}
        </a>
      </li>
    `;
      }

      if (currentPage < totalPages) {
        paginationContainer.innerHTML += `
      <li class="page-btn">
        <a href="#" data-page="next">
          >>
        </a>
      </li>
    `;
      }
    }

    document.addEventListener('click', function (e) {
      if (e.target.closest('.pagination a')) {
        e.preventDefault();
        const page = e.target.getAttribute('data-page');

        if (page === 'next') {
          currentPage++;
        } else {
          currentPage = parseInt(page);
        }

        renderHotels(currentPage);
        renderPagination();
      }
    });

    fetch('data/hotel.json')
      .then(response => response.json())
      .then(data => {
        allHotels = data;
        renderHotels(currentPage);
        renderPagination();

        iso = new Isotope('#hotel-list', {
          itemSelector: '.room-item',
          layoutMode: 'fitRows'
        });
      })
      .catch(error => console.error('Gagal memuat data hotel:', error));
  </script>

  <!-- Java Script Pencarian -->
    <script>
        const pencarianRouteUrl = "{{ route('hasil_pencarian') }}";
    </script>
    <script src="{{ asset('js-01/pencarian.js') }}"></script>

  <script> new WOW().init(); </script>
@endpush