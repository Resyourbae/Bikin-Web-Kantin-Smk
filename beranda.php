<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #4B4444;
        /* box-sizing: border-box; */
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

    .carousel-inner {
        border-radius: 10px;
        margin-top: 30px;
    }

    .carousel-item img {
        width: 100%;
        height: 500px;
        /* Sesuaikan dengan tinggi yang diinginkan */
        object-fit: cover;
        /* Ini akan menjaga aspek rasio gambar */
    }

    .main {
        margin: 20px;
    }

    .pesan-box {
        width: 80%;
        height: 450px;

        border-radius: 10px;
        background-color: #D9D9D9;
        box-shadow: -8px 6px 5px #A6A3A3;
    }

    .container {
        align-items: center;
        display: flex;
        justify-content: center;
        
    }

    .card-columns {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr));
        gap: 1rem;
    }

    .card-img-top {
        max-height: 200px;
        object-fit: cover;
    }
</style>

<body>
    <!-- navbar start -->
    <nav class="navbar m-2 " style="background-color: #D9D9D9;">
        <div class="container-fluid mt-3">
            <h2 class="navbar-brand">
                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-buttom">
                KANTIN SMK AK <span class="span1">NUSA</span> <span class="span2">BANGSA</span>
            </h2>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- indicator start -->
    <div class="container-fluid">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active object-fit-cover" data-bs-interval="1000">
                    <img src="./img/2024-10-16_00.54.44.png" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="2000">
                    <img src="./img/2024-10-15_02.15.49.png" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="3000">
                    <img src="./img/2024-10-18_00.41.29.png" class="d-block" alt="...">
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
    <!-- indicator end-->

    <!-- Input Pesanan start -->
    <div class="main d-flex flex-column justify-content-center align-items-center" data-aos="zoom-in">
        <div class="pesan-box p-5">
            <h3 class="d-flex flex-column align-items-center ">
                <form method="post"> <span class="badge text-bg-secondary"><i class="fa-solid fa-kitchen-set"></i> mau pesan makanan dan minuman? <i class="fa-solid fa-kitchen-set"></i></span>
            </h3>
            <div>
                <label for="nama">Nama <i class="fa-solid fa-user"></i></label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div>
                <label for="kelas">Kelas <i class="fa-solid fa-school"></i></label>
                <input type="text" class="form-control" name="kelas" id="kelas">
            </div>
            <div>
                <label for="makanan">makanan <i class="fa-solid fa-burger"></i></label>
                <input type="text" class="form-control" name="makanan" id="makanan">
            </div>
            <div>
                <label for="minuman">minuman <i class="fa-solid fa-mug-hot"></i></label>
                <input type="text" class="form-control" name="minuman" id="minuman">
            </div>
            <div class="d-grid gap-1 col-6 mx-auto">
                <button class="btn btn-outline-primary form-control mt-4" type="submit" name="btnpesan">pesan</button>
            </div>
            </form>
        </div>
        <!-- Input Pesanan end -->

        <!-- card menu start -->
        <div class=" container text-center p-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card-columns" style="width: 18rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/5b294d3e-41ec-4ded-9322-28efb0501d86.png" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- card menu end -->

        <!-- script framework start -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./fontawesome/js/all.min.js"></script>
        <!-- script framework end-->
</body>

</html>