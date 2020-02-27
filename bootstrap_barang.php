<?php
include 'header.php';
?>
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
    
    if ($harga_brg >= 400000) {
      echo"<div class='alert alert-primary' role='alert'>
      Harga diskon yang diperoleh sebesar Rp.
      ", $harga_brg*$diskon ;
      echo" dan Harga $nama_brg yang harus dibayar sebesar Rp.", $harga_brg-($harga_brg*$diskon);
    echo"</div>";
   }
   else{
     echo"data kosong";
   }
}
    
    
?>

<?php
include 'footer.php'
?>