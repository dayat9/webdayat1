<?php
include 'header.php';
?>
<!-- pembuka syntax navbar -->

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <a class="navbar-brand" href="#">Hoka Bakery</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Our Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Acehnese Pizza</a>
              <a class="dropdown-item" href="#">Acehnese Donut</a>
              <a class="dropdown-item" href="#">Acehnese Risoles</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <br>
      <!-- penutup syntax navbar -->
<form method="POST">

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Barang">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Harga Barang</label>
    <div class="col-sm-3">
      <input type="number" class="form-control" name="barang" placeholder="Masukkan Harga Barang">
    </div>
  </div>
  
  <button type="submit" name="input" value="input" class="btn btn-primary mb-2">Bayar</button>
</form>

<br>

<?php

if (isset($_POST['input'])) {
    $nama_brg = $_POST['nama'];
    $harga_brg = $_POST['barang'];
    $diskon = 20/100;
    
    if($harga_brg >= 400000){
        echo"
        <div class="alert alert-success" role="alert">
        'harga diskon yang diperoleh sebesar Rp.
        ', $harga_brg*$diskon ;
        echo" dan Harga $nama_brg yang harus dibayar sebesar Rp.", $harga_brg-($harga_brg*$diskon);
        echo"</div>";
     }
?>