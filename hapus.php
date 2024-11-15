<?php 
include "koneksi.php";
// persiapan hapus start
if(isset($_POST['bhapus'])){
    // persiapan hapus start
    if(isset($_POST['bhapus'])){
        $hapus = mysqli_query($con, "DELETE FROM tb_pembeli WHERE Nama = '$_POST[Nama]'");

        // jika hapus sukses start
        if($hapus){
            echo "<script> alert ('Hapus Berhasil');
            document.location='keterangan.php'; </script>";
        }
        else{
            echo "<script> alert ('Hapus Berhasil');
            document.location='keterangan.php'; </script>";
        }
        // jika hapus sukses end
    }
    // persiapan hapus end
}
// persiapan hapus end
?>