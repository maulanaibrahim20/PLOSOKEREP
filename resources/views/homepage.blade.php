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
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="/disini/index.html"><i class="bi bi-house-door-fill"></i></a>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-houses-fill"></i> Profil Desa </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/Sejarah">Sejarah Desa</a></li>
              <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-rolodex"></i> Pelayanan </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Pelayanan KTP</a></li>
              <li><a class="dropdown-item" href="#">Pelayanan KK</a></li>
              <li><a class="dropdown-item" href="#">Pelayanan Akta Kelahiran</a></li>
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
            <a class="nav-link login btn" href="{{route('login')}}" style="background-color: blue;"> Login</a>
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
        <!-- welcome.blade.php -->
        <div class="col-12 col-md-8">
          <div class="jadwal-container" id="jadwalSholat">
            <!-- Isi jadwal sholat disini -->
            <div class="jadwal-item" id="imsak"></div>
            <div class="jadwal-item subuh" id="subuh"></div>
            <div class="jadwal-item dzuhur" id="dzuhur"></div>
            <div class="jadwal-item ashar" id="ashar"></div>
            <div class="jadwal-item maghrib" id="maghrib"></div>
            <div class="jadwal-item isya" id="isya"></div>
          </div>
          <br>
          <div class="card shadow p-0 mb-3 bg-body rounded">
            <div class="card-body p-0 ">
              <h5 class="card-title text-center py-2 m-0" style="background-color: #00D1FF; ">Berita Ter-update</h5>
            </div>
            <br>
            <div class="container-fluid">
              <div class="row">
                <div class="col-4">
                  <div class="card shadow p-0 mb-3 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card shadow p-0 mb-3 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card shadow p-0 mb-3 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

<script>
    const latitude = -6.3294;
    const longitude = 108.319;

    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('id-ID');
        const dateString = now.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
        document.getElementById('tanggal').textContent = dateString;
        document.getElementById('jam').textContent = timeString;
    }

    function getPrayerTimes() {
        const url = `https://api.aladhan.com/v1/calendar?latitude=${latitude}&longitude=${longitude}&method=2`;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                const today = new Date();
                const date = today.getDate() - 1; 
                const timings = data.data[date].timings;

                document.getElementById('imsak').textContent = `Imsak: ${timings.Fajr}`;
                document.getElementById('subuh').textContent = `Subuh: ${timings.Fajr}`;
                document.getElementById('dzuhur').textContent = `Dzuhur: ${timings.Dhuhr}`;
                document.getElementById('ashar').textContent = `Ashar: ${timings.Asr}`;
                document.getElementById('maghrib').textContent = `Maghrib: ${timings.Maghrib}`;
                document.getElementById('isya').textContent = `Isya: ${timings.Isha}`;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    setInterval(updateTime, 1000);
    getPrayerTimes();

    // NOTE: JANGAN DI UBAH2 API KEY NYA,ITU UNTUK WILAYAH INDRAMAYU
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
