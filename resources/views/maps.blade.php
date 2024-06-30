<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    .map-info-container {
    display: flex;
    border: 2px solid #000; 
    border-radius: 10px; 
    max-width: 1000px; 
    margin: 0 auto; 
    padding: 20px; 
}

.map-container {
    flex: 1;
}

.info-container {
    flex: 0 0 300px; 
    margin-left: 20px;
}


  </style>
  <body>
    @include('layout/navbar')
    <br>
    <br>
    <br>

    <div class="map-info-container">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63428.7118182766!2d108.10089042491914!3d-6.484340352920101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ecbc254f159e7%3A0x5a1bd9656311b724!2sPlosokerep%2C%20Kec.%20Terisi%2C%20Kabupaten%20Indramayu%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711250951212!5m2!1sid!2sid" width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info-container bg-white">
            <h2>Informasi Lokasi</h2>
            <p><strong>Negara:</strong> Indonesia</p>
            <p><strong>Provinsi:</strong> Jawa Barat</p>
            <p><strong>Kabupaten:</strong> Indramayu</p>
            <p><strong>Kecamatan:</strong> Terisi</p>
            <p><strong>Kode Kemendagri:</strong> 32.12.26.2004</p>
            <p><strong>Luas:</strong> 7,61 km²</p>
            <p><strong>Jumlah penduduk:</strong> 5.595 jiwa</p>
            <p><strong>Kepadatan:</strong> 735,27 jiwa/km²</p>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>