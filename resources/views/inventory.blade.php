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
    <title>Inventory - Desa Plosokerep</title>
</head>

<body>
    @include('layout/navbar')
    <div class="container mt-2">
        <div class="info-container shadow p-1 mb-5 rounded">
            <i class="bi bi-megaphone-fill info-icon"></i>
            <span class="fw-bold text-dark">Sekilas Info</span>
            <div class="info-text">
                <marquee behavior="" direction="">
                    <b>Selamat datang di Website Resmi UMKM Desa Plosokerep</b>
                </marquee>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ URL('gambar/logo.png') }}" id="borrowForm" class="center-image" width="200px"
                                height="250px" alt="">
                        </div>
                        <br>
                        <h2 class="card-title text-center mb-4">PENGAJUAN PEMINJAMAN BARANG</h2>
                        <form action="{{ route('inventory.borrow') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="borrowerName" class="form-label">Nama Peminjam</label>
                                <input type="text" class="form-control" id="borrowerName" name="borrowerName"
                                    placeholder="Masukkan nama peminjam" required />
                            </div>
                            <div class="mb-3">
                                <label for="itemSelect" class="form-label">Pilih Barang</label>
                                <select class="form-select" id="itemSelect" name="item_id" required>
                                    <option selected disabled>Pilih barang yang ingin dipinjam</option>
                                    @foreach ($categories as $category => $items)
                                        <optgroup label="{{ $category }}">
                                            @foreach ($items as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->name }} (Stok: {{ $item->stock }})
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="borrowQuantity" class="form-label">Jumlah Peminjaman</label>
                                <input type="number" class="form-control" id="borrowQuantity" name="quantity"
                                    min="1" placeholder="Masukkan jumlah barang yang ingin dipinjam" required />
                            </div>

                            <div class="mb-3">
                                <label for="startDate" class="form-label">Tanggal Mulai Peminjaman</label>
                                <input type="date" class="form-control" id="startDate" name="start_date" required />
                            </div>

                            <div class="mb-3">
                                <label for="endDate" class="form-label">Tanggal Akhir Peminjaman</label>
                                <input type="date" class="form-control" id="endDate" name="end_date" required />
                            </div>

                            <button id="submitButton" type="submit" class="btn btn-primary">Ajukan Peminjaman</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout/copyright')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('success'))
        <script type="text/javascript">
            Swal.fire({
                title: "Berhasil",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    @if (session('error'))
        <script type="text/javascript">
            Swal.fire({
                title: "Gagal",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif

    <script>
        document.getElementById('submitButton').addEventListener('click', function(e) {
            @if (!Auth::check())
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Anda harus login untuk mengirimkan pengaduan.',
                    confirmButtonText: 'Login'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route('login') }}';
                    }
                });
            @endif
        });
    </script>
</body>

</html>
