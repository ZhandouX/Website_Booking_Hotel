@extends('layouts.app')

@section('title', 'Detail Hotel')

@section('content')
    @include('partials.page-header', [
        'title' => 'Booking Hotels',
        'breadcrumb' => 'Detail Hotel'
    ])

  {{-- Pencarian --}}
  @include('partials.search')

  {{-- Welcome Section --}}
  @include('partials.detail_hotel')

  {{-- Newsletter --}}
  @include('partials.newsletter')
@endsection

@push('scripts')
  <!-- Javascript Pemanggilan Data Detail Hotel-->
  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const hotelId = urlParams.get("id");

    // Global
    let gambarHotel = [];
    let currentImageIndex = 0;

    function openModal(index) {
    if (!Array.isArray(gambarHotel) || gambarHotel.length === 0) return;

    currentImageIndex = index;
    updateModalImage();

    const modal = document.getElementById("lightboxModal");
    modal.classList.remove("d-none");
    modal.classList.add("d-flex");
    }

    function closeModal() {
    const modal = document.getElementById("lightboxModal");
    modal.classList.remove("d-flex");
    modal.classList.add("d-none");
    }


    function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + gambarHotel.length) % gambarHotel.length;
    updateModalImage();
    }

    function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % gambarHotel.length;
    updateModalImage();
    }

    function updateModalImage() {
    const modalImage = document.getElementById("modalImage");
    modalImage.classList.add("opacity-0");
    setTimeout(() => {
      modalImage.src = gambarHotel[currentImageIndex];
      modalImage.classList.remove("opacity-0");
    }, 150);
    }

    // Tutup modal jika klik di luar gambar
    document.getElementById("lightboxModal").addEventListener("click", function (event) {
    if (event.target.id === "lightboxModal") {
      closeModal();
    }
    });

    // Fetch data hotel
    fetch("data/detail-hotel.json")
    .then(response => response.json())
    .then(hotelData => {
      if (hotelData[hotelId]) {
      const data = hotelData[hotelId];
      localStorage.setItem("selectedHotelId", hotelId);

      document.querySelector(".hotel-title").innerText = data.name;
      const alamatLink = document.querySelector(".alamat a");
      alamatLink.innerText = data.address;
      alamatLink.href = data.lokasi;

      document.getElementById("deskripsi-fasilitas").innerHTML = data.fasilitas;
      document.getElementById("deskripsi-lokasi").innerText = data.lokasi_strategis;
      document.getElementById("alasan").innerText = data.alasan;
      document.getElementById("bintang-hotel").innerHTML = `<span>${data.bintang}</span>`;
      let container = document.getElementById("fasilitas-utama");
      data.fasilitas_utama.forEach(f => {
        let div = document.createElement("div");
        div.className = "d-flex align-items-center gap-2 mb-2";
        div.innerHTML = `<span>${f.icon}</span> ${f.nama}`;
        container.appendChild(div);
      });

      let ul = document.getElementById("tempat-terdekat");
      data.tempat_terdekat.forEach(tempat => {
        let li = document.createElement("li");
        li.innerText = tempat;
        ul.appendChild(li);
      });

      let tipeKamarList = document.getElementById("tipe-kamar");
      data.tipe_kamar.forEach(kamar => {
        let li = document.createElement("li");
        li.innerText = kamar;
        tipeKamarList.appendChild(li);
      });

      let kebijakanHotelList = document.getElementById("kebijakan-hotel");
      data.kebijakan_hotel.forEach(kebijakanHotel => {
        let li = document.createElement("li");
        li.innerText = kebijakanHotel;
        kebijakanHotelList.appendChild(li);
      });


      // Gambar
      document.getElementById("gambar-1").src = data.gambar_1;
      document.getElementById("gambar-2").src = data.gambar_2;
      document.getElementById("gambar-3").src = data.gambar_3;
      document.getElementById("gambar-4").src = data.gambar_4;
      document.getElementById("gambar-5").src = data.gambar_5;
      document.getElementById("gambar-6").src = data.gambar_6;
      document.getElementById("gambar-7").src = data.gambar_7;
      document.getElementById("gambar-8").src = data.gambar_8;



      gambarHotel = [
        data.gambar_1,
        data.gambar_2,
        data.gambar_3,
        data.gambar_4,
        data.gambar_5,
        data.gambar_6,
        data.gambar_7,
        data.gambar_8,
        data.gambar_9,
        data.gambar_10
      ];

      // Tambahkan event click ke gambar ke-5 setelah gambar siap
      const lihatSemua = document.getElementById("gambar-5-wrapper");
      if (lihatSemua && gambarHotel.length > 0) {
        lihatSemua.addEventListener("click", () => {
        if (gambarHotel[0]) openModal(0);
        });
      }


      } else {
      document.querySelector(".main-content").innerHTML = "<h4>Hotel tidak ditemukan</h4>";
      }
    })
    .catch(error => {
      console.error("Gagal memuat detail hotel:", error);
      document.querySelector(".main-content").innerHTML = "<h4>Gagal memuat data hotel.</h4>";
    });
  </script>

  <script>
    function handleOverlayClick(event) {
    if (event.target.id === "lightboxModal") {
      closeModal();
    }
    }
  </script>

  <!-- JS Fitur Pencarian -->
  <script>
    function cariHotel() {
    const nama = document.getElementById("namaHotel").value.trim().toLowerCase();
    const lokasi = document.getElementById("lokasiHotel").value;
    const bintang = document.getElementById("bintangHotel").value;
    const kategori = document.getElementById("kategoriHotel").value;
    const btn = document.getElementById("btnCari");
    const loading = document.getElementById("loadingCari");
    const text = document.getElementById("textCari");

    // Validasi input (semua kosong)
    if (nama === "" && lokasi === "" && bintang === "" && kategori === "") {
      alert("Silakan isi salah satu filter pencarian terlebih dahulu.");
      return;
    }

    // Tampilkan loading
    text.classList.add("d-none");
    loading.classList.remove("d-none");
    btn.disabled = true;

    fetch("data/hotel.json")
      .then(response => response.json())
      .then(data => {
      const hasil = data.filter(hotel => {
        const cocokNama = nama === "" || hotel.nama.toLowerCase().includes(nama);
        const cocokAlamat = lokasi === "" || hotel.alamat.toLowerCase().includes(lokasi.toLowerCase());
        const cocokKategori = kategori === "" || hotel.kategori.toLowerCase().includes(kategori);
        const jumlahBintang = hotel.rating.split("⭐").length - 1;
        const cocokRating = bintang === "" || jumlahBintang == bintang;

        return cocokNama && cocokAlamat && cocokRating && cocokKategori;
      });


      localStorage.setItem("hasilPencarian", JSON.stringify(hasil));
      window.location.href = "{{ route('hasil_pencarian') }}";
      })
      .catch(error => {
      alert("Terjadi kesalahan saat memuat data.");
      console.error(error);
      })
      .finally(() => {
      // Reset tombol
      btn.disabled = false;
      loading.classList.add("d-none");
      text.classList.remove("d-none");
      });
    }
  </script>

  <!-- Fitur ulasan hotel -->
  <script>
    document.getElementById("form-ulasan").addEventListener("submit", function (e) {
    e.preventDefault();

    // Ambil nilai input form
    const nama = document.getElementById("nama").value.trim();
    const email = document.getElementById("email").value.trim();
    const pesan = document.getElementById("pesan").value.trim();

    // Ambil ID hotel dari parameter URL (?id=oyo-azzahra)
    const urlParams = new URLSearchParams(window.location.search);
    const hotelId = urlParams.get("id");
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (!hotelId) {
      alert("ID hotel tidak ditemukan di URL.");
      return;
    }

    // Ambil nama hotel dari file JSON lokal
    fetch("/data/detail-hotel.json")
      .then(response => {
      if (!response.ok) throw new Error("Gagal membaca file detail hotel.");
      return response.json();
      })
      .then(data => {
      const namaHotel = data[hotelId]?.name;

      if (!namaHotel) {
        alert("Data hotel tidak ditemukan.");
        return;
      }

      // Siapkan data ulasan
      const ulasan = {
        id: hotelId,
        name: namaHotel,
        nama_pengunjung: nama,
        email: email,
        pesan: pesan
      };

      // Kirim ulasan ke Laravel endpoint
      fetch("/kirim-ulasan", {
        method: "POST",
        headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": csrfToken,
        "Accept": "application/json"
        },
        body: JSON.stringify(ulasan)
      })
        .then(res => res.json())
        .then(response => {
        alert(response.message || "Ulasan berhasil dikirim.");
        document.getElementById("form-ulasan").reset();
        })
        .catch(error => {
        console.error("Terjadi kesalahan:", error);
        alert("Gagal mengirim ulasan.");
        });
      })
      .catch(err => {
      console.error("Gagal ambil data hotel:", err);
      alert("Gagal mengambil informasi hotel.");
      });
    });
  </script>

  <!-- Menampilkan data ulasan -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const hotelId = urlParams.get("id");

    if (!hotelId) return;

    const ulasanContainer = document.getElementById("ulasan-tamu");

    fetch("/data/detail-hotel.json")
      .then(res => {
      if (!res.ok) throw new Error("Gagal ambil detail hotel");
      return res.json();
      })
      .then(detailData => {
      // Debug ID dan data detail
      console.log("ID hotel dari URL:", hotelId);
      console.log("Apakah hotel tersedia di detail-hotel.json?", detailData[hotelId]);

      // Cek apakah ID ditemukan dalam detail-hotel.json
      if (!detailData[hotelId]) {
        ulasanContainer.innerHTML = "<p>Hotel tidak ditemukan.</p>";
        return;
      }

      // Lanjut ambil ulasan
      fetch("/ambil-ulasan")
        .then(res => {
        if (!res.ok) throw new Error("Gagal ambil ulasan");
        return res.json();
        })
        .then(ulasanData => {
        console.log("Semua ulasan:", ulasanData);

        const ulasanHotel = ulasanData.filter(
          u => u.id?.trim().toLowerCase() === hotelId.trim().toLowerCase()
        );

        console.log("Ulasan yang cocok:", ulasanHotel);

        if (ulasanHotel.length === 0) {
          ulasanContainer.innerHTML = "<p>Belum ada ulasan untuk hotel ini.</p>";
          return;
        }

        ulasanContainer.innerHTML = "";
        ulasanHotel.forEach(item => {
          ulasanContainer.innerHTML += `
          <blockquote>
            “${item.pesan}”<br>
            — <strong>${item.nama_pengunjung}</strong> (<em>${item.email}</em>)
          </blockquote>
          `;
        });
        })
        .catch(err => {
        console.error("Gagal fetch ulasan:", err);
        ulasanContainer.innerHTML = "<p>Gagal memuat ulasan.</p>";
        });
      })
      .catch(err => {
      console.error("Gagal ambil detail-hotel.json:", err);
      ulasanContainer.innerHTML = "<p>Gagal memuat data hotel.</p>";
      });
    });
  </script>
  <script> new WOW().init(); </script>
@endpush