<?php
include '../koneksi/koneksi.php';
    
    if(isset($_POST['login'])) {
        $username = $_POST['user'];
        $password = md5($_POST['pass']);
    

        // query
        $login=mysqli_query($koneksi,"SELECT * from user WHERE username='$username' and password='$password'");
        

        // pengecekan
        $cek=mysqli_num_rows($login);
        // menampilkan definisi data
        $data=mysqli_fetch_assoc($login);
        

    if($cek>0){
        if($data['level']=="penjual"){
            $_SESSION['username']=$data['username'];
            $_SESSION['level']=$data['level'];

            echo"<script>
            alert('berhasil'); window.location.href='../biodata.php';
            </script>";
        }elseif($data['level']=="pembeli"){
            $_SESSION['username']=$data['username'];
            $_SESSION['level']=$data['level'];

            echo"<script>
            alert('berhasil'); window.location.href='../biodata.php';
            </script>";
        }else{
            echo "<br>Gagal Login";
        }
        }
    }
    


    //     if($username=='dayat' && $password=='dayat99') {
    //         header ('location: nilai_mahasiswa.php');

    //     }else if($username=='yayat' && $password=='yayat99') {
    //         header ('location: diskon.php');

    //     }else{
    //         echo"Login Error";
    //     }
    // }
    ?>