<?php

include'../koneksi/koneksi.php';


if(isset ($_POST['regis'])) {
        $id=md5(uniqid());
        $namalengkap = $_POST['nama'];
        $username = $_POST['user'];
        $password = md5($_POST['pass']);
        $email = $_POST['email'];
        $level = $_POST['level'];
        
        // query
        $input_query=mysqli_query($koneksi,"INSERT into user VALUES('$id','$namalengkap','$username','$password','$email','$level')") or die (mysqli_error($input_query));

        if($input_query){
            echo"
                <script>alert('Data Berhasil di input dan silakan login')
                    window.location.href='../login.php'
                </script>";
        }else{

        }

    }

?>