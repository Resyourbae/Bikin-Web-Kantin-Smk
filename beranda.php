<!-- php conection start -->
<?php 
    // koneksi db start
    include "koneksi.php";
// koneksi db end

// Meninmpan data dari btn pesan start
if (isset($_POST['btnpesan'])) {
    $pesan = mysqli_query($con, "INSERT INTO tb_pembeli(Nama, Kelas, Makanan, Minuman) VALUES 
    ('$_POST[Nama]','$_POST[Kelas]','$_POST[Makanan]','$_POST[Minuman]')");

        // jika Simpan sukses
        if($pesan){
            echo "<script>alert('Berhasil Pesan')</script>";
            echo "<script>window.location.href='beranda.php'</script>";
        }
        else{
            echo "<script>alert('Gagal Pesan')</script>";
            echo "<script>window.location.href='beranda.php'</script>";
        }
    }
    // Meninmpan data dari btn pesan end
?>
<!-- php conection end -->

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
        height: 460px;

        border-radius: 10px;
        background-color: #D9D9D9;
        box-shadow: -8px 6px 5px #A6A3A3;
    }

    .container {
        align-items: center;
        display: flex;
        justify-content: center;
        
    }

    .card{
        box-shadow: -3px 6px 6px #A6A3A3;
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

    a{
        color: #FFA305;
    }
</style>

<body>
    <!-- navbar start -->
    <nav class="navbar m-2 " style="background-color: #D9D9D9;">
        <div class="container-fluid mt-3">
            <h2 class="navbar-brand">
                <img src="./img/logo ak.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-buttom">
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
                    <img src="./img/BG_BigPlaza_Night.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="2000">
                    <img src="./img/BG_BeachFestival_Night.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="3000">
                    <img src="./img/BG_BigPlaza_Night.jpg" class="d-block" alt="...">
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
                <form method="post"> <span class="badge text-bg-secondary"><i class="fa-solid fa-kitchen-set" style="color:  #fe4848;"></i> mau pesan makanan dan minuman? <i class="fa-solid fa-kitchen-set" style="color: #fe4848;"></i></span>
            </h3>
            <div>
                <label for="nama">Nama <i class="fa-solid fa-user"></i></label>
                <input type="text" class="form-control" name="Nama" id="nama">
            </div>
            <div>
                <label for="kelas">Kelas <i class="fa-solid fa-school"></i></label>
                <input type="text" class="form-control" required name="Kelas" id="kelas">
            </div>
            <div>
                <label for="makanan">Makanan <i class="fa-solid fa-burger"></i></label>
                <input type="text" class="form-control" required name="Makanan" id="makanan">
            </div>
            <div>
                <label for="minuman">Minuman <i class="fa-solid fa-mug-hot"></i></label>
                <input type="text" class="form-control" required name="Minuman" id="minuman">
            </div>
            <div class="d-grid gap-1 col-4 mx-auto">
                <button class="btn btn-outline-primary form-control mt-4" type="submit" name="btnpesan">pesan</button>
                <button class="btn btn-outline-warning form-control mt-1" type="submit" name="btnpesan"><a href="keterangan.php" class="text-decoration-none">Data Pembeli</a></button>
            </div>
            </form>
        </div>
        <!-- Input Pesanan end -->

        <!-- card menu start -->
        
        <div class=" container text-center p-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/burger.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/burger.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/burger.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/burger.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/burger.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/burger.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/burger.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="./img/burger.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
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