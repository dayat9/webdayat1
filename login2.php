<?php
    include 'header.php';
?>
<div class="container-fluid">
    <form action="" method="POST">
        <label> Username :</label>
        <input type="text"  name="user" placeholder="Masukan Username">
        <br>
        <label>Password :</label> 
        <input type="password" name="pass" placeholder="Masukan Password">
        <br>
        <input type="submit" name="login" value="login">
    </form>

    <?php
    
    if(isset ($_POST['login'])) {
        $username = $_POST ['user'];
        $password = $_POST ['pass'];
        
        if($username=='dayat' && $password=='dayat99') {
            header ('location: nilai_mahasiswa.php');

        }else if($username=='yayat' && $password=='yayat99') {
            header ('location: bootstrap_barang.php');

        }else{
            echo"Login Error";
        }
    }
    ?>
    
</div>




<?php
    include 'footer.php'
?>