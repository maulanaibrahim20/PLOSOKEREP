<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Carousel with Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin: 2px;
            width: 15rem;
        }

        .carousel-inner .row {
            display: flex;
            justify-content: center;
        }

        .carousel-container {
            border: 2px solid #007bff;
            padding: 10px;
            margin-top: 20px;
        }

        .carousel-item .card {
            width: 100%;
            border: none;
            margin-right: 10px;
        }

        .carousel-item .card img {
            width: 100%;
            height: auto;
        }

        .ketua-card {
            max-width: 15rem;
            margin-bottom: 20px;
        }

        @media (min-width: 992px) {
            .carousel-container {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
            }

            .carousel-container .carousel {
                flex: 1;
                margin-left: 20px;
            }

            .carousel-container .ketua-card {
                flex: 0 0 30%;
            }
        }
    </style>
</head>

<body>
    @include('layout.navbar')

    <br>
    <br>
    <br>

    <div class="container mt-4 shadow p-3 mb-5 bg-info rounded ">
        <div class="row">
            <div class="col-md-3">
                <div class="card ketua-card shadow p-3 mb-5 bg-info rounded">
                    <img src="{{ URL('Struktur/kuwu.jpeg') }}" class="card-img-top img-fluid rounded-2" alt="Foto">
                    <div class="card-body">
                        <h5 class="card-title text-light fw-light">KARMIN</h5>
                        <p class="card-text">Ketua</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container-fluid p-0 bg-info">
                    <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Start of first slide -->
                            <div class="carousel-item active">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/MISTA.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/FARIDI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of first slide -->

                            <!-- Repeat this block for each additional slide -->
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of additional slide -->

                            <!-- Repeat this block for each additional slide -->
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA0</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA1</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA2</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA3</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of additional slide -->

                            <!-- Repeat this block for each additional slide -->
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA4</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ URL('Struktur/ARIS SUPRIADI.png') }}" class="card-img-top img-fluid"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">MISTA5</h5>
                                                <p class="card-text">Anggota</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of additional slide -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.copyright')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
