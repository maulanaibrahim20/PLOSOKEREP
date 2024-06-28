<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Carousel with Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            width: 18rem;
            margin: auto;
        }
        .carousel-item {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<<<<<<< HEAD
=======
  @include('layout.navbar')
  {{-- <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgb(9, 9, 117); background: linear-gradient(122deg, rgba(9, 9, 117, 1) 10%, rgba(0, 212, 255, 1) 63%); z-index: 1050;">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#">
        <img src="{{URL ('gambar/LOGO1.png')}}" alt="Logo" style="width:150px; height: 40px;"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item" style="margin-right: 20px;">
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
        </ul>
      </div>
    </div>
  </nav> --}}
>>>>>>> fb34a01e7c666c538c27922223602f740ba6ab84

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 3</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 4</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 5</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 6</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 7</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 8</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 9</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 10</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 11</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 12</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 13</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 14</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 15</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
