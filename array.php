<?php
include 'header.php';
?>

<form action="" method="POST">
    <input type="text" name="mangga">
    <input type="submit" name="tambah" value="Tampil">

</form>

<?php
    if(isset($_POST['tambah'])){
        $buah=$_POST['mangga'];

        $arraybuah= [
            "mangga",
            "jambu",
            "kelapa"

        ];
        if($buah=$arraybuah[2]){
            echo"$arraybuah[2]";
        }
    }
?>

<?php
    // metode pertama
    $arrBuah = array ("Mangga","Apel","Pisang","Jeruk");
        echo $arrBuah[0]; //Mangga
        echo $arrBuah[3]; //Jeruk

    $arrwarna = array ();
    $arrwarna [] = "Merah";
    $arrwarna [] = "Biru";
    $arrwarna [] = "Hijau";
    $arrwarna [] = "Putih";
    echo $arrwarna[0]; //Merah
    echo $arrwarna[2]; //Hijau

    // metode kedua
    
    $buah=array ("mangga","kelapa","jambu","apel");
        echo"<br>$buah[2];
    
    // metode ketiga

    $buah = array ();
    $buah3[]="mangga"
    $buah3[]="kelapa"
    $buah3[]="jambu"
    $buah3[]="apel"
    echo"<br>$buah3[0]";
?>