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
    <link rel="stylesheet" href="css/styles.css">

  <title>Desa Plosokerep</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark " style="background: rgb(9, 9, 117); background: linear-gradient(122deg, rgba(9, 9, 117, 1) 10%, rgba(0, 212, 255, 1) 63%); z-index: 1050;">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#">
        <img src="{{URL ('gambar/LOGO1.png')}}" alt="Logo" style="width:150px; height: 40px;"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item" style="margin-right: 20px; background-color: black; border-radius: 10px;">
            <a class="nav-link" href="/disini/index.html"><i class="bi bi-house-door-fill"></i></a>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px; background-color: black; border-radius: 10px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-houses-fill"></i> Profil Desa </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/disini/sejarah/sejarah.html">Sejarah Desa</a></li>
              <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px; background-color: black; border-radius: 10px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-rolodex"></i> Pelayanan </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Pelayanan KTP</a></li>
              <li><a class="dropdown-item" href="#">Pelayanan KK</a></li>
              <li><a class="dropdown-item" href="#">UMKM</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px; background-color: black; border-radius: 10px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-pie-chart-fill"></i> Data Desa </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Data Penduduk</a></li>
              <li><a class="dropdown-item" href="#">Data Wilayah</a></li>
              <li><a class="dropdown-item" href="#">Data Pendidikan</a></li>
            </ul>
          </li>
          <li class="nav-item" style="margin-right: 20px; background-color: black; border-radius: 10px;">
            <a class="nav-link" href="#"><i class="bi bi-geo-alt-fill"></i> Peta</a>
          </li>
          <li class="nav-item" style="margin-right: 20px; background-color: black; border-radius: 10px;">
            <a class="nav-link" href="#"><i class="bi bi-image-fill"></i> Galeri</a>
          </li>
          <li class="nav-item" style="margin-right: 20px; background-color: black; border-radius: 10px;">
            <a class="nav-link" href="#"><i class="bi bi-newspaper text-black"></i></i> Berita</a>
          </li>
          <li class="nav-item" style="margin-right: 20px; background-color: black; border-radius: 10px;">
            <a class="nav-link login btn" href="#" style="background-color: blue;"> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-4">
    <div class="row">
      <div class="col-12 col-md-4 sidebar" id="kiri">
        <img id="logo1" src="img/logo.png" alt="logo" style="width: 128px; height: 159px" />
        <h1>Desa Plosokerep</h1>
        <p>Kec. Terisi, Kabupaten Indramayu, Jawa Barat</p>
        <div class="row">
          <div class="col-4 d-flex justify-content-center mb-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="height: 100px; width: 100%;">
              <img src="{{URL ('gambar/icon/kontak.png')}}" alt="" style="width: 30px; height: 30px" />
              <p style="font-size: 10px">Kontak Desa</p>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="{{URL ('gambar/avatar.png')}}" alt="" style="height: 90px; width: 90px" />
                    <br /><br>
                    <button type="button" class="btn" style="background: rgb(0, 255, 20); background: linear-gradient(135deg, rgba(0, 255, 20, 1) 10%, rgba(0, 195, 32, 1) 62%); width: 100%;">
                      <i class="bi bi-whatsapp"></i> <b><a href="https://wa.me/628976562320" style="color: white;">whatsapp</a></b>
                    </button>
                    <button type="button" class="btn mt-2" style="background: rgb(0,142,255); background: linear-gradient(96deg, rgba(0,142,255,1) 10%, rgba(205,192,68,1) 37%, rgba(195,0,158,1) 62%, rgba(195,0,0,1) 79%);">
                      <i class="bi bi-instagram"></i> <b><a href="https://instagram.com" style="color: white;">Instagram</a></b>
                    </button>
                    <button type="button" class="btn mt-2" style="background: rgb(4, 0, 255);">
                      <i class="bi bi-facebook"></i> <b><a href="https://facebook.com" style="color: white;">Facebook</a></b>
                    </button>
                    <button type="button" class="btn mt-2" style="background: rgb(255, 0, 0);">
                      <i class="bi bi-youtube"></i> <b><a href="https://youtube.com" style="color: white;">Youtube</a></b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/desa.png" alt="" style="width: 30px; height: 30px" />
              <p style="font-size: 14px">Aparatur Desa</p>
            </button>
          </div>

          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/pesan.png" alt="" style="width: 30px; height: 30px" />
              <p style="font-size: 14px">Tentang Desa</p>
            </button>
          </div>
          
          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/lokasi.png" alt="" style="width: 30px; height: 30px" />
              <p style="font-size: 14px">Lokasi Desa</p>
            </button>
          </div>

          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/maps.png" alt="" style="width: 30px; height: 30px" />
              <p style="font-size: 14px">Peta Desa</p>
            </button>
          </div>

          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/umkm.png" alt="" style="width: 30px; height: 30px" />
              <p style="font-size: 14px">UMKM Desa</p>
            </button>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-8 main-content">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{URL ('gambar/11.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{URL ('gambar/22.png')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <footer class="mt-4 fixed-bottom">
    <p>&copy; 2024 Kementerian Komunikasi dan Informatika RI</p>
  </footer>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
