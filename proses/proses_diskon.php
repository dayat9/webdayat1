<?php
include '../koneksi/koneksi.php';

if(isset ($_POST['input'])) {
    $id=md5(uniqid());
    $namabarang=$_POST['nama'];
    $hargabarang=$_POST['barang'];
    $stok=$_POST['stok'];
    $kategori=$_POST['kategori'];

      // query
    $query_diskon=mysqli_query($koneksi,"INSERT into stok VALUES('$id','$namabarang','$hargabarang','$stok','$kategori')") or die(mysqli_error($query_diskon));

    if($query_diskon){
        echo"<script>alert('Data Berhasil di input dan silakan login')
        </script>";
    }else{
      echo"<script>alert('Data Gagal di input')
      </script>";

    }
}
?>