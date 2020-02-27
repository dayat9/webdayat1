<?php
include 'header.php';

?>
<!-- Default form contact -->
<form method="POST" class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Form Biodata</p>

    <!-- Name --> 
    <input type="text" name="nama" class="form-control mb-4" placeholder="Nama" >

    <!-- Email -->
    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Jenis Kelamin  -->
    <select class="browser-default custom-select mb-4" name="jk">
        <option value="1" selected>Jenis Kelamin</option>
        <option value="2">Laki-laki</option>
        <option value="3">Perempuan</option>
    </select>

    <!-- Alamat -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="alamat" rows="3" placeholder="Alamat"></textarea>
    </div>

    <!-- Tanggal Lahir -->
    <input type="date" name="tl" class="form-control mb-4" >

    <!-- Tempat Lahir -->
    <input type="text" name="tl" class="form-control mb-4" placeholder="Tempat Lahir">
    
    <!-- No HP-->
    <input type="Number" name="hp" class="form-control mb-4" placeholder="Nomor HP">

    <!-- hobi-->
    <select class="browser-default custom-select mb-4" placeholder="Hobi">
        <option value="1" selected>Hobi</option>
        <option value="2">Badminton</option>
        <option value="3">Futsal</option>
    </select>


    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Saya Telah Mengisi Dengan Benar</label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="input">Input</button>

</form>
<!-- Default form contact -->
    
 <?php
 include 'footer.php';
 ?>

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