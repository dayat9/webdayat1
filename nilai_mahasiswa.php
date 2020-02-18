<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>
<body>

<form action="" method="POST">
    <label>NIM :</label> 
    <input type="number" name="nim" placeholder="Masukan NIM">
    <br>
    <label> Nama:</label>
    <input type="text"  name="nama" placeholder="Masukan Nama">
    <br>
    <label> Jurusan:</label>
    <input type="text"  name="jurusan" placeholder="Masukan Jurusan">
    <br>
    <label>Nilai Harian:</label>
    <input type="number" name="harian" placeholder="Masukan Nilai Harian">
    <br>
    <label>Nilai Quiz:</label>
    <input type="number" name="quiz" placeholder="Masukan Nilai Quiz">
    <br>
    <label>Nilai UTS:</label>
    <input type="number" name="uts" placeholder="Masukan Nilai UTS">
    <br>
    <label>Nilai UAS:</label>
    <input type="number" name="uas" placeholder="Masukan Nilai UAS">
    <input type="submit" name="input" value="input">
</form>
    
</body>
</html>

<?php

if (isset($_POST['input'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nilai_harian = $_POST['harian'];
    $nilai_quiz = $_POST['quiz'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas= $_POST['uas'];
    $nilai = ($nilai_harian*10/100)+($nilai_quiz*15/100)+( $nilai_uts*35/100)+($nilai_uas*35/100) ;
    
    echo "NIM saya adalah $nim <br>";
    echo "Nama saya adalah $nama <br>";
    echo "Jurusan $jurusan<br>";
    echo "Nilai Harian adalah $nilai_harian<br>";
    echo "Nilai Quiz adalah $nilai_quiz<br>";
    echo "Nilai UTS adalah $nilai_uts<br>";
    echo "Nilai UAS adalah $nilai_uas<br>";

    if($nilai<=50){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan nilai yang diperoleh adalah $nilai E";
    }else if($nilai<=65){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan nilai yang diperoleh adalah $nilai adalah D";
    }
    else if($nilai<=72){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan nilai yang diperoleh adalah $nilai adalah C";
    }
    else if($nilai<=83){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan nilai yang diperoleh adalah $nilai adalah B";
    }
    else if($nilai<=100){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan nilai yang diperoleh adalah $nilai adalah A";
    }else{
        echo "$nama dengan $nim dan $jurusan nilai yang diperoleh adalah $nilai dinyatakan tidak lulus";
    }
}
?>