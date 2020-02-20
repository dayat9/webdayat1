<?php
include 'header.php';
?>

<form action="" method="POST">
    <label>Nama :</label> 
    <input type="text" name="nama" placeholder="Masukan Nama">

    <br>

    <label> Email :</label>
    <input type="Email" name="email" placeholder="contoh@email">

    <br>

    <label>Jenis Kelamin:</label>
    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
    <input type="radio" name="jk" value="Perempuan">Perempuan

    <br>

    <label>Alamat</label>
    <textarea name="alamat"></textarea>

    <br>

    <label> Tanggal Lahir:</label>
    <input type="date" name="tl" placeholder= "dd/mm/yyyy">

    <br>

    <label>Tempat Lahir:</label>
    <input type="text" name="tm">

    <br>

    <label>No Hp:</label>
    <input type="Number" name="hp" placeholder="Masukan No Hp">

    <br>

    <label>Hobi:</label>
    <input type="checkbox" name="hobi1" value="Badminton">Badminton
    <input type="checkbox" name="hobi2" value="Futsal">Futsal

    <input type="submit" name="input" value="input">
</form>

    
</body>
</html>

<?php

if (isset($_POST['input'])) {
    $name_saya = $_POST['nama'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tl'];
    $tempat_lahir = $_POST['tm'];
    $no_hp = $_POST['hp'];
    $hobi1 = $_POST['hobi1'];
    $hobi2 = $_POST['hobi2'];
    echo "nama saya adalah $name_saya<br>";
    echo "email saya adalah $email<br>";
    echo "jenis kelamin saya adalah $jenis_kelamin<br>";
    echo "alamat saya adalah $alamat<br>";
    echo "tanggal lahir saya adalah $tanggal_lahir<br>";
    echo "tempat lahir saya adalah $tempat_lahir<br>";
    echo "hubungi saya dinomor $no_hp<br>";
    echo "hobi saya adalah $hobi1<br>";
    echo "hobi saya adalah $hobi2<br>";
}

?>

