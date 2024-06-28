<!DOCTYPE html>
<html lang="id">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnH1z6B8+Zt1Z7gL8b9LaE6A5+aF6rrgh/s3Rqs8pPv1gxd5F2Zwx+wRT7OoXtY/8PeAqTxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/UMKM-D.css">

  <title>Desa Plosokerep</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgb(9, 9, 117); background: linear-gradient(122deg, rgba(9, 9, 117, 1) 10%, rgba(0, 212, 255, 1) 63%); z-index: 1050;">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#">
        <img src="{{URL ('gambar/LOGO1.png')}}" alt="Logo" style="width:150px; height: 40px;"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item" style="margin-right: 20px; color: white;">
            <a class="nav-link" href="/disini/index.html"><i class="bi bi-house-door-fill"></i></a>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-houses-fill"></i> Profil Desa </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/sejarah">Sejarah Desa</a></li>
              <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="H_aparatur">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-rolodex"></i> Pelayanan </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Pengaduan</a></li>
              <li><a class="dropdown-item" href="#">Pengajuan serat</a></li>
              <li><a class="dropdown-item" href="#">UMKM</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-pie-chart-fill"></i> Data Desa </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Data Penduduk</a></li>
              <li><a class="dropdown-item" href="#">Data Wilayah</a></li>
              <li><a class="dropdown-item" href="#">Data Pendidikan</a></li>
            </ul>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="#"><i class="bi bi-geo-alt-fill"></i> Peta</a>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="#"><i class="bi bi-image-fill"></i> Galeri</a>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="#"><i class="bi bi-newspaper text-black"></i></i> Berita</a>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link login btn" href="#" style="background-color: blue;"> Login</a>
          </li>
          <li class="nav-item text-light" style="margin-right: 20px;">
            <a class="nav-link" href="/UMKM-k"><i class="bi bi-cart4"></i> <span id="cart-count" class="badge bg-danger">0</span></a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-2 ">
    <div class="info-container shadow p-1 mb-5 rounded">
      <span class="fw-bold text-dark"><i class="bi bi-megaphone-fill info-icon "></i> Sekilas Info</span>
      <div class="info-text">
        <marquee behavior="" direction="">
          <b>Selamat datang di Website Resmi UMKM Desa Plosokerep</b>
        </marquee>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img id="mainImage" src="{{URL ('gambar/umkm/kedelai-3.png')}}" class="img-fluid" alt="">
        <div class="row mt-2">
          <div class="col-4">
            <img src="{{URL ('gambar/umkm/kedelai-1.jpeg')}}" class="img-thumbnail clickable-image" alt="">
          </div>
          <div class="col-4">
            <img src="{{URL ('gambar/umkm/kedelai-2.jpg')}}" class="img-thumbnail clickable-image" alt="">
          </div>
          <div class="col-4">
            <img src="{{URL ('gambar/umkm/kedelai-3.png')}}" class="img-thumbnail clickable-image" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3>Susu Kedelai</h3>
        <p>Rp. 28.000</p>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">BUAT PESANAN</h5>
            <form>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                <label for="noTelepon" class="form-label">No Telepon</label>
                <input type="tel" class="form-control" id="noTelepon" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                <div class="input-group jumlah-barang-group">
                  <button type="button" class="btn btn-outline-secondary" id="kurang">-</button>
                  <input type="text" class="form-control text-center jumlah-barang-input" id="jumlahBarang" value="1" readonly>
                  <button type="button" class="btn btn-outline-secondary" id="tambah">+</button>
                </div>
              </div>
              <div class="mb-3">
                <label for="totalHarga" class="form-label">Total Harga</label>
                <input type="text" class="form-control" id="totalHarga" value="28000" readonly>
              </div>
              <a href="/UMKM-D" class="btn btn-warning mt-3">Kembali</a>
              <a href="javascript:void(0);" id="add-to-cart" class="btn btn-info mt-3">Masukkan Keranjang</a>
              <a href="/UMKM-c" id="buy-now" class="btn btn-success mt-3">Beli Produk</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUET6hK6y/pw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Custom JS -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const mainImage = document.getElementById("mainImage");
      const clickableImages = document.querySelectorAll(".clickable-image");
      const hargaSatuan = 28000;
      const jumlahBarang = document.getElementById('jumlahBarang');
      const totalHarga = document.getElementById('totalHarga');
      const kurang = document.getElementById('kurang');
      const tambah = document.getElementById('tambah');

      clickableImages.forEach(image => {
        image.addEventListener("click", function() {
          mainImage.src = this.src;
        });
      });

      kurang.addEventListener('click', function() {
        if (parseInt(jumlahBarang.value) > 1) {
          jumlahBarang.value = parseInt(jumlahBarang.value) - 1;
          totalHarga.value = hargaSatuan * parseInt(jumlahBarang.value);
        }
      });

      tambah.addEventListener('click', function() {
        jumlahBarang.value = parseInt(jumlahBarang.value) + 1;
        totalHarga.value = hargaSatuan * parseInt(jumlahBarang.value);
      });
    });
    document.addEventListener("DOMContentLoaded", function() {
    const mainImage = document.getElementById("mainImage");
    const clickableImages = document.querySelectorAll(".clickable-image");
    const hargaSatuan = 28000;
    const jumlahBarang = document.getElementById('jumlahBarang');
    const totalHarga = document.getElementById('totalHarga');
    const kurang = document.getElementById('kurang');
    const tambah = document.getElementById('tambah');
    const addToCartButton = document.getElementById('add-to-cart');
    const cartCount = document.getElementById('cart-count');
    
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartCount.textContent = cart.length;

    clickableImages.forEach(image => {
      image.addEventListener("click", function() {
        mainImage.src = this.src;
      });
    });

    kurang.addEventListener('click', function() {
      if (parseInt(jumlahBarang.value) > 1) {
        jumlahBarang.value = parseInt(jumlahBarang.value) - 1;
        totalHarga.value = hargaSatuan * parseInt(jumlahBarang.value);
      }
    });

    tambah.addEventListener('click', function() {
      jumlahBarang.value = parseInt(jumlahBarang.value) + 1;
      totalHarga.value = hargaSatuan * parseInt(jumlahBarang.value);
    });

    addToCartButton.addEventListener('click', function() {
      const product = {
        name: 'Susu Kedelai',
        price: hargaSatuan,
        quantity: parseInt(jumlahBarang.value),
        total: hargaSatuan * parseInt(jumlahBarang.value)
      };
      cart.push(product);
      localStorage.setItem('cart', JSON.stringify(cart));
      cartCount.textContent = cart.length;
    });
  });
  </script>
</body>
</html>
