<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnH1z6B8+Zt1Z7gL8b9LaE6A5+aF6rrgh/s3Rqs8pPv1gxd5F2Zwx+wRT7OoXtY/8PeAqTxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/pekerjaan.css">
  <title>Desa Plosokerep</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
@include('layout/navbar')

<br>
<br>
<br>
  <div class="container mt-5">
    <h3>DATA PEKERJAAN DI DESA PLOSOKEREP</h3>
    <div class="row">
      <div class="col-md-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>NO</th>
              <th>Pekerjaan</th>
              <th>Jumlah</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pekerjaan as $kerja)
            <tr>
                <td>{{ $kerja->id }}</td>
                <td>{{ $kerja->pekerjaan }}</td>
                <td contenteditable="true" class="data-value">{{ $kerja->jumlah }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <canvas id="jobChart"></canvas>
      </div>
    </div>
  </div>

  @include('layout/copyright')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/LvMR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    // Ambil data pekerjaan dari Blade ke JavaScript
    const pekerjaanData = @json($pekerjaan->pluck('jumlah'));
    const pekerjaanLabels = @json($pekerjaan->pluck('pekerjaan'));

    // Definisikan palet warna untuk chart
    const colors = ['#00d4ff', '#4B515D', '#FFBB28', '#FF8042', '#00C49F', '#FFD700', '#7B68EE', '#FFA07A', '#20B2AA', '#778899'];

    // Fungsi untuk memperbarui chart
    function updateChart() {
      const dataValues = document.querySelectorAll('.data-value');
      const updatedData = Array.from(dataValues).map(cell => parseInt(cell.textContent) || 0);
      jobChart.data.datasets[0].data = updatedData;
      jobChart.update();
    }

    const ctx = document.getElementById('jobChart').getContext('2d');
    const data = {
      labels: pekerjaanLabels,
      datasets: [{
        data: pekerjaanData,
        backgroundColor: colors.slice(0, pekerjaanData.length) // Gunakan warna dari palet untuk setiap dataset
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
    const jobChart = new Chart(ctx, config);

    // Tambahkan event listener pada tabel untuk mendeteksi perubahan
    document.querySelectorAll('.data-value').forEach(cell => {
      cell.addEventListener('input', updateChart);
    });
  </script>
</body>
</html>
