<?php 
    // koneksi db start
    include "koneksi.php";
    // koneksi db end

    $upload = mysqli_query($con, "SELECT * FROM tb_pembeli where id='$_GET[id]'");
    $data = mysqli_fetch_array($upload);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
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
    .decoration{
        text-decoration: none;
    }
    .pesan-box {
        margin: 10px;
        width: 80%;
        height: 465px;

        border-radius: 10px;
        background-color: #D9D9D9;
        box-shadow: -8px 6px 5px #A6A3A3;
    }
</style>
<body>
<div class="main d-flex flex-column justify-content-center align-items-center" data-aos="zoom-in">
<div class="pesan-box">
    <form method="POST" name="ubah">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center">Ubah Pesanan</h2>
            <div class="col-md-6 mx-auto">
                <div class="mb-2">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" name="Nama" value="<?php echo $data['Nama'];?>">
                </div>
                <div class="mb-2">
                    <label for="Kelas">Kelas</label>
                    <input type="text" class="form-control" name="Kelas" value="<?php echo $data['Kelas'];?>">
                </div>
                <div class="mb-2">
                    <label for="Makanan">Makanan</label>
                    <input type="text" class="form-control" name="Makanan" value="<?php echo $data['Makanan'];?>">
                </div>
                <div class="mb-2">
                    <label for="Minuman">Minuman</label>
                    <input type="text" class="form-control" name="Minuman" value="<?php echo $data['Minuman'];?>">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-primary" name="btnubah" type="submit">Simpan</button>
                <a href="keterangan.php" class="decoration">
                    <div class="d-grid gap-2 col-12 mx-auto">
                    <button class="btn btn-outline-danger" type="button">Batal</button>
                    </div>
                </a>
            </div>
        </div>
    </form>
    </div>
    </div>    






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

    <?php 
  include "koneksi.php";

    // jika tombol ubah di klik start
    if(isset($_POST['btnubah'])){
        $ubah = mysqli_query($con, "UPDATE tb_pembeli SET Nama = '$_POST[Nama]', Kelas = '$_POST[Kelas]', Makanan = '$_POST[Makanan]', Minuman = '$_POST[Minuman]' Where id = '$_GET[id]'");
    
        // jika ubah sukses start
        if($ubah){
            echo "<script> alert ('Ubah Data Berhasil');
            document.location='keterangan.php'; </script>";
        }
        else{
            echo "<script> alert ('Ubah Data Gagal');
            document.location='keterangan.php'; </script>";
        }
        // jika ubah sukses end
    
    }
    // jika tombol ubah di klik end
    ?>