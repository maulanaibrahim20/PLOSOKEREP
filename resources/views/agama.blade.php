<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnH1z6B8+Zt1Z7gL8b9LaE6A5+aF6rrgh/s3Rqs8pPv1gxd5F2Zwx+wRT7OoXtY/8PeAqTxw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/kelamin.css">
    <title>Desa Plosokerep</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
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
    <br>
    <br>
    <br>
    <div class="container mt-5">
        <h3>DATA AGAMA DI DESA PLOSOKEREP</h3>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Agama</th>
                            <th>No</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Islam</td>
                            <td contenteditable="true" class="data-value">1000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kristen</td>
                            <td contenteditable="true" class="data-value">500</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Hindu</td>
                            <td contenteditable="true" class="data-value">200</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Budha</td>
                            <td contenteditable="true" class="data-value">100</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <canvas id="religionChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // Fungsi untuk memperbarui chart
        function updateChart() {
            const dataValues = document.querySelectorAll('.data-value');
            const islam = parseInt(dataValues[0].textContent) || 0;
            const kristen = parseInt(dataValues[1].textContent) || 0;
            const hindu = parseInt(dataValues[2].textContent) || 0;
            const budha = parseInt(dataValues[3].textContent) || 0;

            religionChart.data.datasets[0].data = [islam, kristen, hindu, budha];
            religionChart.update();
        }

        const ctx = document.getElementById('religionChart').getContext('2d');
        const data = {
            labels: ['Islam', 'Kristen', 'Hindu', 'Budha'],
            datasets: [{
                data: [1000, 500, 200, 100],
                backgroundColor: ['#00d4ff', '#4B515D', '#FFBB28', '#FF8042']
            }]
        };
        const config = {
            type: 'pie',
            data: data,
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + ' orang';
                            }
                        }
                    }
                }
            },
        };
        const religionChart = new Chart(ctx, config);

        // Tambahkan event listener pada tabel untuk mendeteksi perubahan
        document.querySelectorAll('.data-value').forEach(cell => {
            cell.addEventListener('input', updateChart);
        });
    </script>
</body>

</html>
