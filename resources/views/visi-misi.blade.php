<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnH1z6B8+Zt1Z7gL8b9LaE6A5+aF6rrgh/s3Rqs8pPv1gxd5F2Zwx+wRT7OoXtY/8PeAqTxw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <title>Desa Plosokerep</title>
</head>

<body>
<<<<<<< HEAD
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        style="background: rgb(9, 9, 117); background: linear-gradient(122deg, rgba(9, 9, 117, 1) 10%, rgba(0, 212, 255, 1) 63%); z-index: 1050;">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#">
                <img src="{{ URL('gambar/LOGO1.png') }}" alt="Logo" style="width:150px; height: 40px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/homepage"><i class="bi bi-house-door-fill"></i></a>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-houses-fill"></i> Profil
                            Desa </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/sejarah">Sejarah Desa</a></li>
                            <li><a class="dropdown-item" href="/visi-misi">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="H_aparatur">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-rolodex"></i>
                            Pelayanan </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/H_pengaduan">Pengaduan</a></li>
                            <li><a class="dropdown-item" href="/H_surat">Pengajuan serat</a></li>
                            <li><a class="dropdown-item" href="/UMKM-D">UMKM</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-pie-chart-fill"></i> Data
                            Desa </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/kelamin">Kelamin</a></li>
                            <li><a class="dropdown-item" href="/pekerjaan">Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="/agama">Agama</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/map-nav"><i class="bi bi-geo-alt-fill"></i> Peta</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/galeri"><i class="bi bi-image-fill"></i> Galeri</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/Berita"><i class="bi bi-newspaper text-black"></i> Berita</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link login btn" href="{{ route('login') }}" style="background-color: blue;">
                            Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
=======
  @include('layout.navbar')
  
   
>>>>>>> fb34a01e7c666c538c27922223602f740ba6ab84

    <div class="container mt-4 pt-5">
        <div class="row">
            <div class="col-12 col-md-4 sidebar mt-4 bg-primary" id="kiri">
                <img src="{{ URL('gambar/logo.png') }}" alt="logo"
                    style="width: 128px; height: 159px; display: block; margin: 0 auto;" id="logo1">
                <h1 class="text-center">Desa Plosokerep</h1>
                <p class="text-center">Kec. Terisi, Kabupaten Indramayu, Jawa Barat</p>
                <div class="row">
                    <div class="col-4 d-flex justify-content-center mb-2">
                        <button type="button" class="btn-success" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" style="height: 100px; width: 100%;">
                            <img src="{{ URL('gambar/icon/kontak.png') }}" alt=""
                                style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                            <p style="font-size: 10px; text-align: center;">Kontak Desa</p>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ URL('gambar/avatar.png') }}" alt=""
                                            style="height: 90px; width: 90px; display: block; margin: 0 auto;">
                                        <br><br>
                                        <button type="button" class="btn"
                                            style="background: rgb(0, 255, 20); background: linear-gradient(135deg, rgba(0, 255, 20, 1) 10%, rgba(0, 195, 32, 1) 62%); width: 100%;">
                                            <i class="bi bi-whatsapp"></i> <b><a href="https://wa.me/628976562320"
                                                    style="color: white;">whatsapp</a></b>
                                        </button>
                                        <button type="button" class="btn mt-2"
                                            style="background: rgb(0,142,255); background: linear-gradient(96deg, rgba(0,142,255,1) 10%, rgba(205,192,68,1) 37%, rgba(195,0,158,1) 62%, rgba(195,0,0,1) 79%);">
                                            <i class="bi bi-instagram"></i> <b><a href="https://instagram.com"
                                                    style="color: white;">Instagram</a></b>
                                        </button>
                                        <button type="button" class="btn mt-2" style="background: rgb(4, 0, 255);">
                                            <i class="bi bi-facebook"></i> <b><a href="https://facebook.com"
                                                    style="color: white;">Facebook</a></b>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-4 d-flex justify-content-center mb-2">
                        <button type="button" class="btn-success" style="height: 100px; width: 100%;">
                            <img src="{{ URL('gambar/icon/berita.png') }}" alt=""
                                style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                            <p style="font-size: 10px; text-align: center;">Berita</p>
                        </button>
                    </div>
                    <div class="col-4 d-flex justify-content-center mb-2">
                        <button type="button" class="btn-success" style="height: 100px; width: 100%;">
                            <img src="{{ URL('gambar/icon/galeri.png') }}" alt=""
                                style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                            <p style="font-size: 10px; text-align: center;">Tentang Desa</p>
                        </button>
                    </div>
                    <div class="col-4 d-flex justify-content-center mb-2">
                        <button type="button" class="btn-success" style="height: 100px; width: 100%;">
                            <img src="{{ URL('gambar/icon/umkm.png') }}" alt=""
                                style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                            <p style="font-size: 10px; text-align: center;">UMKM</p>
                        </button>
                    </div>
                    <div class="col-4 d-flex justify-content-center mb-2">
                        <button type="button" class="btn-success" style="height: 100px; width: 100%;">
                            <img src="{{ URL('gambar/icon/surat.png') }}" alt=""
                                style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                            <p style="font-size: 10px; text-align: center;">Pengajuan Surat</p>
                        </button>
                    </div>
                    <div class="col-4 d-flex justify-content-center mb-2">
                        <button type="button" class="btn-success" style="height: 100px; width: 100%;">
                            <img src="{{ URL('gambar/icon/pengaduan.png') }}" alt=""
                                style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                            <p style="font-size: 10px; text-align: center;">Pengaduan</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="container">
                    <div class="card text-break">
                        <div class="card-header text-center">
                            <b>Visi & Misi Desa Plosokerep Tahun 2015-2021</b>
                        </div>
                        <div class="card-body">
                            <b class="text-center">Visi Desa</b>
                            <p>
                                <i class="bi bi-caret-right-fill"></i> Membangun, Menata, Pemerintahan Desa yang Baik
                                dan Bersih guna terwujudnya masyarakat desa yang BERDIKARI
                            </p>
                            <p>
                                <i class="bi bi-caret-right-fill"></i> Berwawasan : Mempunyai Konsepsi Cara Pandang
                            </p>
                            <p>
                                <i class="bi bi-caret-right-fill"></i> Dedikasi : Sebuah pengorbanan tenaga, pikiran, dan waktu demi keberhasilan suatu usaha yang mempunyai tujuan mulia.
                            </p>
                            <p>
                                <i class="bi bi-caret-right-fill"></i> Kooperatif : Saling ketergantungan positif, bertanggung jawab penuh, tatap muka, komunikasi dengan sesama, evaluasi proses masyarakat.
                            </p>

                            <p>
                                <i class="bi bi-caret-right-fill"></i> Religius : Kepercayaan terhadap Allah SWT.
                            </p>
                            <br>
                            <p>
                              <b>misi Desa</b>
                            </p>
                            <p>
                              <i class="bi bi-caret-right-fill"></i> Mewujudkan Persatuan dan Kesatuan masyarakat desa plosokerep yang aman, stabil, sejahtera, demokrasi dan berdaulat, serta berperan aktif dalam menciptakan kerukunan beragama, berbangsa dan bernegara sesuai asas dasar negara indonesia Pancasila dan Undang-Undang Dasar 1945
                          </p>
                          <p>
                              <i class="bi bi-caret-right-fill"></i> Menyelenggarakan Pemerintahan Desa yang Bersih dari korupsi dan bentuk-bentuk penyelewengan lainnya.
                          </p>
                          <p>
                              <i class="bi bi-caret-right-fill"></i> Melayani, mengayomi, dan memberikan rasa aman dan nyaman kepada masyarakat.
                          </p>
                          <p>
                              <i class="bi bi-caret-right-fill"></i>Memberikan peluang kepada lembaga-lembaga desa untuk mengembangkan sayapnya sesuai dengan TUPOKSINYA
                          </p>
                          <p>
                              <i class="bi bi-caret-right-fill"></i>Meningkatkan pembangunan di desa yang transparan, inspiratif, dan merata diantaranya bidang infrastruktur, pertanian, pendidikan, kesehatan, perekonomian, sosial, dan budaya dll.
                          <i class="bi bi-caret-right-fill"></i>Meningkatkan IPM desa Plosokerep melalui SDM dan SDA terutama bidang pendidikan, kesehatan, dan daya beli.
                      </p>
                      <p>
                        <i class="bi bi-caret-right-fill"></i> Membangun, Menata, Pemerintahan Desa yang Baik
                      </p>
                      <p>
                        <i class="bi bi-caret-right-fill"></i>Meningkatkan IPM desa Plosokerep melalui SDM dan SDA terutama bidang pendidikan, kesehatan, dan daya beli.
                      </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXlUr3aB+Kx4dZPeM6K/A6zt7v/tbB6rZ9E+EQ6MofeFB1NXFUOfN8FHwp+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhG81sKDtZKWpCwrP7f8KpP4YfIvATeFw5PauH526ymkitDv8f0XwRGE8K/9" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- Font Awesome JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
            integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
