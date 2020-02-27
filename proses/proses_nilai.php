<?php
include '../koneksi/koneksi.php';

    if(isset ($_POST['input'])) {
        $id_mahasiswa=md5(uniqid());
        $nama=$_POST['nama'];
        $nim=$_POST['nim'];
        $jurusan=$_POST['jur'];
        $mata_kuliah=$_POST['mk'];
        $harian=$_POST['harian'];
        $quiz=$_POST['quiz'];
        $uts=$_POST['uts'];
        $uas=$_POST['uas'];
        $hasil=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);
        
        if($hasil<=50){
            $grade='E';
        }else if($hasil<=65){
            $grade='D';
        }else if($hasil<=75){
            $grade='C';
        }else if($hasil<=85){
            $grade='B';
        }else if($hasil<=100 ||$hasil>100){
            $grade='A';
        }
        // query
        $query_nilai=mysqli_query($koneksi,"INSERT into mahasiswa VALUES('$id_mahasiswa','$nama','$nim','$jurusan','$mata_kuliah','$harian','$quiz','$uts','$uas','$hasil','$grade')") or die (mysqli_error($query_nilai));

        if($query_nilai){
            echo"
                <script>alert('Data berhasil diinput')
                    window.location.href='../nilai_mahasiswa.php'
                </script>";
        }else{
            echo"
            <script>alert('Data gagal diinput')
                window.location.href='../nilai_mahasiswa.php'
            </script>";

        }

    }

?>