<?php 
 include "koneksi.php";
?>

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
      <th scope="col" class="text-center">No</th>
      <th scope="col" class="text-center">Nama</th>
      <th scope="col" class="text-center">Kelas</th>
      <th scope="col" class="text-center" colspan="2">Nama Pesanan</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>

  <?php 
  $no = 1;
  $upload = mysqli_query($con, "SELECT * FROM tb_pembeli");
  while($data = mysqli_fetch_array($upload)):
  ?>

  <tr>
    <td class="text-center"><?=$no++?></td>
    <td class="text-center"><?=$data['Nama']?></td>
    <td class="text-center"><?=$data['Kelas']?></td>
    <td class="text-center"><?=$data['Makanan']?></td>
    <td class="text-center"><?=$data['Minuman']?></td>
    <td class="text-center">
      <a href="ubahdata.php?id=<?=$data['Id'];?>"><button class="btn btn-primary">Ubah</button></a>
      <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?=$no?>">Hapus</a>
    </td>
  </tr>
  <!-- modal hapus start-->
    <div class="modal fade" id="hapus<?=$no?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="staticBackdropLabel">Konfirmasi</h3>
          </div>
          <form method="post" action="hapus.php">
            <input type="hidden" name="Nama" value="<?=$data['Nama']?>">
            <div class="modal-body">
              <h5 class="text-center">Apakah Anda Yakin Akan Menghapus Pesanan Ini? <br>
            <span class="text-danger"><?=$data['Nama']?> - <?=$data['Kelas']?></span>
          </h5>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-primary" name="bhapus">Hapus</button>
              <button type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <!-- modal hapus end-->
  <?php endwhile; ?>
</table>
</div>
     <!-- table data end -->

     <!-- scriptnya -->
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./fontawesome/js/all.min.js"></script>
</body>
</html>