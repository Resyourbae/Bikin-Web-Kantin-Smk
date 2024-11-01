<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #4B4444;
        box-sizing: border-box;
    }

    .navbar {
        border-radius: 10px;
        justify-content: center;
    }

    .span1 {
        color: #fff;
    }

    .span2 {
        color: #FF0000;
    }

</style>

<body>
    <!-- navbar start -->
    <nav class="navbar m-2 " style="background-color: #D9D9D9;">
        <div class="container-fluid mt-3">
            <p class="navbar-brand">
                <img src="./img/logo ak.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-buttom">
                Kantin SMK AK <span class="span1">Nusa</span> <span class="span2">Bangsa</span>
            </p>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- indicator start -->
    <div class="container-indicator p-5">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./img/Screenshot 2024-11-01 080433.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <!-- indicator end
  -->
</body>

</html>