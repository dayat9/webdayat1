<?php

    include '../koneksi/koneksi.php';

    if(isset($_POST['tambah'])){
        $id=uniqid();
        $nama_saya=$_POST['nama'];
        $email=$_POST['email'];
        $jenis_kelamin=$_POST['jk'];
        $alamat=$_POST['alamat'];
        $tanggal_lahir=$_POST['tl'];
        $tempat_lahir=$_POST['tm'];
        $no_hp=$_POST['hp'];
        $hobi1=$_POST['hobi1'];
        $hobi2=$_POST['hobi2'];
        $hobi3=$_POST['hobi3'];
        $hobi4=$_POST['hobi4'];
        $hobi=($hobi1.','.$hobi2.','.$hobi3.','.$hobi4);

        $nama_file=$_FILES['foto']['name'];
        
            $format=explode(".", $nama_file);
            $fileExtension = end($format);
            $nama_sementara=$_FILES['foto']['tmp_name'];
            $md5file = md5($nama_file) . "." . $fileExtension;
            

            $lokasi_upload= "../upload/";

            $fungsi_upload=move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);
            

            $query=mysqli_query($koneksi,"INSERT INTO biodata VALUES('','$id','$nama_saya','$email','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$no_hp','$hobi','$md5file')")or die (mysqli_error($query));

            if($query){
                echo'Data Berhasil';
            }else{
                echo'Data Gagal';
            }
    }
?>