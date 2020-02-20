<?php
include 'header.php';
?>

<form action="" method="POST">
    <input type="text" name="color">
    <input type="submit" name="tambah" value="Tampil">
</form>

<?php
if(isset($_POST['tambah'])){
    $color=$_POST['color'];

    $arraycolor= [
        "jambu",
        "apel",
        "mangga",
        "merah",
        "hijau",
        "ungu"

    ];
    if($color==$arraycolor[0]){
        echo"<p style='color: red'>$color</p>";
    }
    else if ($color==$arraycolor[1]){
        echo"<p style='color: pink'>$color</p>";
    }
    else if ($color==$arraycolor[2]){
        echo"<p style='color: orange'>$color</p>";
    }
    else if ($color==$arraycolor[3]){
        echo"<p style='color: red'>$color</p>";
    }
    else if ($color==$arraycolor[4]){
        echo"<p style='color: green'>$color</p>";
    }
    else if ($color==$arraycolor[5]){
        echo"<p style='color: purple'>$color</p>";
    }
    else{
        echo"<p style='color: black'>$color</p>";  
    }
}
?>
