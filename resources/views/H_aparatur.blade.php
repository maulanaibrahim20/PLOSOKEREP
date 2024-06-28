<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Carousel with Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            width: 18rem;
            margin: auto;
        }
        .carousel-item {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 3</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 4</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 5</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 6</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 7</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 8</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 9</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 10</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 11</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 12</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 13</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 14</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ URL('gambar/MISTA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 15</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
