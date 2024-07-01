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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profil Saya') }}</div>
    
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
    
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->name }}</p>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
    
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->email }}</p>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto Profil') }}</label>
    
                            <div class="col-md-6">
                                <img src="{{ $user->foto ? asset('storage/foto/' . $user->foto) : asset('storage/foto/default_avatar.jpg') }}" alt="Profile Picture" class="rounded-circle" style="width: 30px; height: 30px;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href={{route('cart.view')}}>Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
