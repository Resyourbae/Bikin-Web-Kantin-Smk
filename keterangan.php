<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
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

    a{
        color: #000;
    }

    .span1 {
        color: #fff;
    }

    .span2 {
        color: #FF0000;
    }

    h2{
        color: #fff;
    }
</style>
<body>
    <!-- navbar start -->
<nav class="navbar m-2 " style="background-color: #D9D9D9;">
        <div class="container-fluid mt-3">
            <h2 class="navbar-brand">
                <a href="beranda.php" class="text-decoration-none">
                <img src="./img/logo ak.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-buttom">
                KANTIN SMK AK <span class="span1">NUSA</span> <span class="span2">BANGSA</span>
                </a>
            </h2>
        </div>
    </nav>
    <!-- navbar end -->
     <div class="text mt-5">
        <h2 class="text-center">Data Pembeli</h2>
     </div>

     <!-- table data start -->
      <div class="container mt-5">
      <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Nama Pesanan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
     <!-- table data end -->

     <!-- scriptnya -->
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./fontawesome/js/all.min.js"></script>
</body>
</html>