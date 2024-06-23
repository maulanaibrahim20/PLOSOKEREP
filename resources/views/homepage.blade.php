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
  @include('layout.navbar')

  <div class="container mt-4">
    <div class="row">
      <div class="col-12 col-md-4 sidebar" id="kiri">
        <img src="{{URL('gambar/logo.png')}}" alt="logo" style="width: 128px; height: 159px; display: block; margin: 0 auto; margin-top:2rem;" id="logo1">
        <h1 class="text-center ">Desa Plosokerep</h1>
        <p class="text-center">Kec. Terisi, Kabupaten Indramayu, Jawa Barat</p>
        <div class="row">
          <div class="col-4 d-flex justify-content-center mb-2">
            <button type="button" class="btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="height: 100px; width: 100%;">
              <img src="{{URL('gambar/icon/kontak.png')}}" alt="" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
              <p style="font-size: 10px; text-align: center;">Kontak Desa</p>
            </button>
      
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="{{URL('gambar/avatar.png')}}" alt="" style="height: 90px; width: 90px; display: block; margin: 0 auto;">
                    <br><br>
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
              <img src="/icon/desa.png" alt="" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
              <p style="font-size: 14px; text-align: center;">Aparatur Desa</p>
            </button>
          </div>
      
          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/pesan.png" alt="" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
              <p style="font-size: 14px; text-align: center;">Tentang Desa</p>
            </button>
          </div>
      
          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/lokasi.png" alt="" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
              <p style="font-size: 14px; text-align: center;">Lokasi Desa</p>
            </button>
          </div>
      
          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/maps.png" alt="" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
              <p style="font-size: 14px; text-align: center;">Peta Desa</p>
            </button>
          </div>
      
          <div class="col-4 d-flex justify-content-center mb-2">
            <button class="btn btn-primary" style="height: 100px; width: 100%;">
              <img src="/icon/umkm.png" alt="" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
              <p style="font-size: 14px; text-align: center;">UMKM Desa</p>
            </button>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-md-8 mt-2">
        <div class="card">
          <div class="card-header">
            <h4 class="text-center">JADWAL SHOLAT</h4>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <h5 class="text-center"><i class="bi bi-geo-alt-fill"></i> Indramayu</h5>
            </ul>
          </div>
          <div class="card-footer text-body-secondary">
            Tanggal: <span id="current-date"></span>
          </div>
        </div>
        <br>
        <div class="card shadow p-0 mb-3 bg-body rounded">
          <div class="card-body p-0">
            <h5 class="card-title text-center py-2 m-0 " style="background-color: #00D1FF;">Berita Ter-update</h5>
          </div>
          <br>
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-md-4 mb-3">
                <div class="card shadow p-0 bg-body rounded">
                  <img src="{{URL('gambar/berita.jpg')}}" class="card-img-top"  alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <div class="card shadow p-0 bg-body rounded">
                  <img src="{{URL('gambar/berita.jpg')}}" class="card-img-top"  alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <div class="card shadow p-0 bg-body rounded">
                  <img src="{{URL('gambar/berita.jpg')}}" class="card-img-top"  alt="...">
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

  <script>
// Ambil data dari API Aladhan
fetch('https://api.aladhan.com/v1/calendar?latitude=-6.3264&longitude=108.32&method=2')
  .then(response => response.json())
  .then(data => {
    // Ambil data jadwal sholat untuk hari ini
    const today = new Date();
    const hijriDate = data.data[0].date.hijri;
    const gregorianDate = data.data[0].date.gregorian;

    const imsak = data.data[0].timings.Imsak.substring(0, 5);
    const fajr = data.data[0].timings.Fajr.substring(0, 5);
    const dhuhr = data.data[0].timings.Dhuhr.substring(0, 5);
    const asr = data.data[0].timings.Asr.substring(0, 5);
    const maghrib = data.data[0].timings.Maghrib.substring(0, 5);
    const isha = data.data[0].timings.Isha.substring(0, 5);

    // Tampilkan data jadwal sholat dalam elemen HTML
    document.querySelector('.list-group').innerHTML += `
      <li class="list-group-item text-light bg-success d-flex justify-content-between align-items-center">
        Imsak
        <span class="badge text-bg-primary rounded-pill">${imsak}</span>
      </li>
      <li class="list-group-item text-light d-flex bg-primary justify-content-between align-items-center">
        Shubuh
        <span class="badge text-bg-primary rounded-pill">${fajr}</span>
      </li>
      <li class="list-group-item text-light d-flex bg-success justify-content-between align-items-center">
        Dzuhur
        <span class="badge text-bg-primary rounded-pill">${dhuhr}</span>
      </li>
      <li class="list-group-item text-light d-flex bg-primary justify-content-between align-items-center">
        Ashar
        <span class="badge text-bg-primary rounded-pill">${asr}</span>
      </li>
      <li class="list-group-item text-light d-flex  bg-success justify-content-between align-items-center">
        Maghrib
        <span class="badge text-bg-primary rounded-pill">${maghrib}</span>
      </li>
      <li class="list-group-item text-light d-flex bg-primary justify-content-between align-items-center">
        Isya
        <span class="badge text-bg-primary rounded-pill">${isha}</span>
      </li>
    `;

    // Format tanggal Gregorian untuk ditampilkan
    const formattedDate = new Date(gregorianDate).toLocaleDateString('id-ID', {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    });

    // Tampilkan tanggal Gregorian di footer
    document.getElementById('current-date').textContent = formattedDate;
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
