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
    <link rel="stylesheet" href="css/pengaduan.css">
    <title>Desa Plosokerep</title>
</head>

<body>
    @include('layout/navbar')
    <br>
    <br>
    <br>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="{{ URL('gambar/logo.png') }}" class="center-image" width="200px" height="250px"
                        alt="">
                </div>
                <h2 class="card-title text-center mb-4">PENGADUAN MASYARAKAT</h2>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form id="formPengaduan" action="{{ route('simpan_pengaduan') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="namaLengkap" name="nama"
                            value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak yang dapat dihubungi:</label>
                        <input type="text" class="form-control" id="kontak" name="no_tlp"
                            value="{{ old('no_tlp') }}" required>
                        @error('no_tlp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rincianPengaduan" class="form-label">Rincian Pengaduan:</label>
                        <textarea class="form-control" id="rincianPengaduan" name="rincian_pengaduan" rows="4" required>{{ old('rincian_pengaduan') }}</textarea>
                        @error('rincian_pengaduan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto (Optional) :</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary w-100" id="btnSubmit">Kirim</button>
                </form>
                </p>
            </div>
        </div>
    </div>
    @include('layout/copyright')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        document.getElementById('btnSubmit').addEventListener('click', function(e) {
            e.preventDefault();

            const isLoggedIn = this.getAttribute('data-login') === 'true';
            /
            const form = document.getElementById('formPengaduan');

            if (!isLoggedIn) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Anda harus login untuk mengirimkan pengaduan.',
                    confirmButtonText: 'Login'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('login') }}";
                    }
                });
            } else {
                form.submit();
            }
        });
    </script>
</body>

</html>
