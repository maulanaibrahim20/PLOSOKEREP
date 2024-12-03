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
    <link rel="stylesheet" href="css/surat.css">

    <title>Desa Plosokerep</title>
</head>

<body>
    @include('layout.navbar')

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
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ URL('gambar/logo.png') }}" class="center-image" width="200px" height="250px"
                                alt="">
                        </div>
                        <br>
                        <h2 class="card-title text-center mb-4">PENGAJUAN SURAT</h2>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form id="formPegajuanSurat" action="{{ route('pengajuan.surat.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK:</label>
                                <input type="text" class="form-control" id="nik" name="nik" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_hp" class="form-label">Nomor HP:</label>
                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
                            </div>
                            <div class="mb-3">
                                <label for="upload_surat" class="form-label">Upload Surat:</label>
                                <input type="file" class="form-control" id="upload_surat" name="upload_surat"
                                    accept=".pdf,.doc,.docx" required>
                            </div>
                            <button id="btnSubmit" type="submit" class="btn btn-primary w-100"
                                data-login="{{ Auth::check() ? 'true' : 'false' }}">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        document.getElementById('btnSubmit').addEventListener('click', function(e) {
            e.preventDefault();

            const isLoggedIn = this.getAttribute('data-login') === 'true';
            const form = document.getElementById('formPegajuanSurat'); // Pastikan ID form sama

            if (!isLoggedIn) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Anda harus login untuk mengirimkan pengajuan surat.',
                    confirmButtonText: 'Login'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('login') }}";
                    }
                });
            } else {
                form.submit(); // Kirim form jika user sudah login
            }
        });
    </script>
</body>

</html>
