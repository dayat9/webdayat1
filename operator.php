<!-- persentase diskon -->
<?php
    $sepatu = 100000;
    $diskon = 0.1;

    $harga_net = $sepatu - ($sepatu * $diskon);
    echo "harga yang harus dibayar = Rp." . $harga_net;

?>
    
<br>

<?php
    $hal = 10;
    if ($hal % 2 == 0) {
        echo "Halaman genap";
    } else {
        echo "halaman ganjil";
    }
?>

<br>

<?php
    $hal = 11;
    if ($hal % 2 == 0) {
        echo "Halaman genap";
    } else {
        echo "Halaman ganjil";
    }
?>

<br>

<?php

$a=10;
$b=5;
$c=7;
$d=8;

$kali=($a*$d);
$tambah=($a+$c);
$kurang=($b-$d);
$bagi=($a/$b);
$hasil="80";

if($hasil==$kali){

    echo"nilai anda adalah $kali";
    
} else if ( $hasil == 17){
    echo "nilai anda adalah $tambah";
} else if ( $hasil == -3){
    echo "nilai anda adalah $kurang";
} else if ( $hasil == 2){
    echo "nilai anda adalah $bagi";
    }
?>  

<br>
<br>
    <!-- latihanlah -->
<?php

$nim = "0411500400";
$nama = 'Muhammad Hidayat';
$umur = 24;
$nilai = 82.25;
$status = FALSE;

echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "umur : " . $umur; print "<br>";
printf ("nilai : %.3f<br>", $nilai);
if ($status)
    echo "status : aktif";
else
    echo "status : Tidak Aktif";
?>

<br>
<br>

    <!-- definelah -->
<?php
    define ("NAMA", "Achmad Siddiq");
    define ("NILAI" , 90);

    //NAMA = "MUHAMMAD"; //akan menyebabkan error
    echo "NAMA : " . NAMA;
    echo "<br>NILAI : " . NILAI;
?>

<br>
<br>

<?php

    $gaji = 1000000;
    $pajak = 2.5;
    $thp = $gaji - ($gaji*$pajak);

    echo "gaji sebelum pajak = Rp. $gaji <br>";
    echo "gaji yang dibawa pulang = Rp. $thp <br>";

?>

<br>
<br>

<?php

    $a = 5;
    $b = 4;

    echo "$a == $b : ". ($a == $b);
    echo "<br>$a != $b : ". ($a != $b);
    echo "<br>$a > $b : ". ($a > $b);
    echo "<br>$a < $b : ". ($a < $b);
    echo "<br> ($a != $b) && ($a > $b) : ". (($a != $b) && ($a > $b));
    echo "<br> ($a != $b) || ($a > $b) : ". (($a != $b) || ($a > $b));
?>

<br>
<br>

<?php

    $hari = "selasa";
  
    if($hari == "senin"){
        echo"upacara bendera";
    }else if ($hari == "selasa"){
        echo "mancing keributan";
    }else{
        echo "ada yang bulat tapi bukan tekat";
    }
?>

<br>
<br>

<?php

    $nim = 130708090995003;
    $nama = "Muhammad Hidayat";
    $jurusan = "Ilmu Hukum";
    $harian = 10;
    $quiz = 15;
    $uts = 35;
    $uas = 40;
    $nilai = $harian+$quiz+$uts+$uas ;

    if($nilai<=50){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan adalah E";
    }else if($nilai<=65){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan adalah D";
    }
    else if($nilai<=72){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan adalah C";
    }
    else if($nilai<=83){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan adalah B";
    }
    else if($nilai<=100){
        echo "Grade nilai yang diperoleh oleh $nama dengan $nim dan $jurusan adalah A";
    }else{
        echo "$nama dengan $nim dan $jurusan dinyatakan tidak lulus";
    }

?>

