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

    <title>Keranjang</title>
</head>
<body>
    @include('layout.navbar')

    <div class="container mt-4">
        <h2>Keranjang Anda</h2>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(isset($order))
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $order->name }}</h5>
                    <p class="card-text"><strong>Alamat:</strong> {{ $order->address }}</p>
                    <p class="card-text"><strong>Telepon:</strong> {{ $order->phone }}</p>
                    <p class="card-text"><strong>Jumlah Barang:</strong> {{ $order->qty }}</p>
                    <p class="card-text"><strong>Total Harga:</strong> Rp. {{ number_format($order->total_price, 0, ',', '.') }}</p>
                    <p class="card-text"><strong>Status:</strong> {{ $order->status }}</p>
                    <form action="{{ route('order.delete', $order->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <form action="{{ route('checkout', $order->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success">Checkout</button>
                    </form>
                </div>
            </div>
        @else
            <p>Keranjang Anda kosong.</p>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
