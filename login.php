<?php
$user = "mudin";
$password = "leman9";
if ($user == "leman" && $password == "leman9") {
    echo "Login Berhasil";
} else  if($user == "mudin" && $password == "mudin9") {

} else{
    echo "user name dan password salah";
}

?>

<?php
$user = "leman";
if (!isset($user)) {
    echo "variabel tidak ada/belum terbentuk";
}else{
    echo "variabel ada";
}
?>