
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
    if (!modal.classList.contains("hidden")) return; // Jangan buka kalau sudah terbuka

    modal.classList.remove("hidden");
    modal.classList.add("flex");
  }


  function closeModal() {
    const modal = document.getElementById("lightboxModal");
    modal.classList.remove("flex");
    modal.classList.add("hidden");
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
        document.querySelector(".main-content p").innerText = data.description;
        document.getElementById("deskripsi-fasilitas").innerHTML = data.fasilitas;
        document.getElementById("deskripsi-lokasi").innerText = data.lokasi_strategis;
        document.getElementById("deskripsi-alasan").innerText = data.alasan;
        document.getElementById("bintang-hotel").innerHTML = `<span>${data.bintang}</span>`;
        let container = document.getElementById("fasilitas-utama");
        data.fasilitas_utama.forEach(f => {
          let div = document.createElement("div");
          div.className = "flex items-center gap-2";
          div.innerHTML = `<span>${f.icon}</span> ${f.nama}`;
          container.appendChild(div);
        });

        let ul = document.getElementById("tempat-terdekat");
        data.tempat_terdekat.forEach(tempat => {
          let li = document.createElement("li");
          li.innerText = tempat;
          ul.appendChild(li);
        });



        // Gambar
        document.getElementById("gambar-1").src = data.gambar_1;
        document.getElementById("gambar-2").src = data.gambar_2;
        document.getElementById("gambar-3").src = data.gambar_3;
        document.getElementById("gambar-4").src = data.gambar_4;
        document.getElementById("gambar-5").src = data.gambar_5;

        // Isi info
        const infoTable = document.querySelector(".info-table ul");
        infoTable.innerHTML = `
          <li><img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
              <h4>${data.luas}<br><span>Luas Bangunan</span></h4></li>
          <li><img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
              <h4>${data.status}<br><span>Hotel Bintang</span></h4></li>
          <li><img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
              <h4>${data.pembayaran}<br><span>Pembayaran</span></h4></li>
          <li><img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
              <h4>${data.keamanan}<br><span>Keamanan</span></h4></li>
        `;

        gambarHotel = [
          data.gambar_1,
          data.gambar_2,
          data.gambar_3,
          data.gambar_4,
          data.gambar_5,
          data.gambar_6
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