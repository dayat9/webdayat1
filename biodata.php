<?php
    include 'header.php';

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">

<div class="container">
<form action="proses/proses_biodata.php" class="text-center border border-light p-5" method="POST" enctype="multipart/form-data">

    <p class="h4 mb-4">Form Biodata</p>

    <!-- Name --> 
    <input type="text" name="nama" class="form-control mb-4" placeholder="Nama" >

    <!-- Tempat Lahir -->
    <input type="text" name="tm" class="form-control mb-4" placeholder="Tempat Lahir">

    <!-- Tanggal Lahir -->
    <input type="date" name="tl" class="form-control mb-4" >

    <!-- Email -->
    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Jenis Kelamin  -->
    <select class="browser-default custom-select mb-4" name="jk">
        <option value="" selected>Jenis Kelamin</option>
        <option value="2">Laki-laki</option>
        <option value="3">Perempuan</option>
    </select>

    <!-- Alamat -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="alamat" rows="3" placeholder="Alamat"></textarea>
    </div>

    <!-- No HP-->
    <input type="Number" name="hp" class="form-control mb-4" placeholder="Nomor HP">

    <!-- hobi-->
    <div class="form-group row" >
        <label for="inputEmail" class="col-sm-2">Hobi</label>
        <div class="col-sm-6">
        <input type="checkbox" name="hobi1"  id="inputEmail" value="Makan"> Makan
        <input type="checkbox" name="hobi2" id="inputEmail" value="Jalan-Jalan"> Jalan-Jalan
        <input type="checkbox" name="hobi3" id="inputEmail" value="Membaca"> Membaca
        <input type="checkbox" name="hobi4" id="inputEmail" value="Ngoding"> Ngoding
        </div>

    <!-- foto -->
    <input type="file" name="foto" class="form-control mb-4" placeholder="">

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="input" name="tambah">Input</button>

</form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">

$(function () {
                $('#datetimepicker1').datetimepicker();
            });
    
</script>
