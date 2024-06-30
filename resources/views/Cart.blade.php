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
  @include('layout.navbar')

  <div class="container mt-2">
    <div class="info-container shadow p-1 mb-5 rounded">
      <span class="fw-bold text-dark"><i class="bi bi-megaphone-fill info-icon"></i> Sekilas Info</span>
      <div class="info-text">
        <marquee behavior="" direction="">
          <b>Selamat datang di Website Resmi UMKM Desa Plosokerep</b>
        </marquee>
      </div>
    </div>
  </div>
  
  <div class="container">
    <h2>Keranjang Belanja</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
      @foreach($cartItems as $item)
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm">
            <img src="{{ asset('storage/gambar/Product/' . $item->product->img_produk) }}" class="card-img-top" alt="{{ $item->product->nama_produk }}">
            <div class="card-body">
              <h5 class="card-title">{{ $item->product->nama_produk }}</h5>
              <p class="card-text">Harga: Rp. {{ number_format($item->product->harga, 0, ',', '.') }}</p>
              <p class="card-text">Jumlah: {{ $item->quantity }}</p>
              <p class="card-text">Total: Rp. {{ number_format($item->product->harga * $item->quantity, 0, ',', '.') }}</p>
              <p class="card-text"><small class="text-muted">Status: {{ $item->status }}</small></p>
              <p class="card-text"><small class="text-muted">Tanggal Pesan: {{ $item->created_at->format('d-m-y') }}</small></p>
              <p class="card-text"><small class="text-muted">Pemesan: {{ $item->customer_name }}</small></p>
              <p class="card-text"><small class="text-muted">Alamat: {{ $item->customer_address }}</small></p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="btn btn-success">Checkout</a>
                <form action="{{ route('cart.remove', $item->product_id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm ms-1"><i class="bi bi-trash"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <a href="{{ route('umkm_d') }}" class="btn btn-primary mt-4">Lanjut Belanja</a>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUET6hK6y/pw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Custom JS -->
</body>
</html>
