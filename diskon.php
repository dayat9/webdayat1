<?php
include 'header.php';
?>

<div class="container">
        <div class="row">
            <div class="col-6">
                <form action="proses/proses_diskon.php" method="POST">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang :</label>
                        <input type="text" name="nama" class="form-control" id="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang :</label>
                        <input type="number" name="barang" class="form-control" id="harga_barang">
                    </div>
                    <div class="form-group">
                        <label for="stok_barang">Stok Barang :</label>
                        <input type="number" name="stok" class="form-control" id="stok_barang">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori :</label>
                        <input type="text" name="kategori" class="form-control" id="kategori">
                    </div>
                    <input type="submit" name="input" class="btn btn-success" value="Bayar">
                    <br>
                    <br>
                </form>
            </div>
            <div class="col-6">
                <?php
                    if(isset($_POST['input'])){
                        $nama_brg=$_POST['nama'];
                        $harga_brg=$_POST['barang'];
                        $stok = $_POST['stok'];
                        $kategori = $_POST['kategori'];
                        $diskon=20/100;
                        if($harga_brg>=400000){
                            echo"
                                <div class='alert alert-primary' role='alert'>
                                Harga Diskon yang Diperoleh Sebesar Rp.
                            ", $harga_brg*$diskon ;
                            echo"<br> Harga $nama_brg yang Harus Dibayar Sebesar Rp.",$harga_brg-($harga_brg*$diskon);
                            echo" </div>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>

<?php
include 'footer.php'
?>