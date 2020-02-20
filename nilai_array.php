<?php
$arrNilai = array ("Ani"  => 80, "Mudin" => 90, "Ani" => 75,  "Budi" => 85);

echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai <br>";
}

reset ($arrNilai);
echo"<br> Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each($arrNilai)) {
    echo "Nilai $nama = $nilai <br>";
}

?>

<?php

$arrwarna = array ("blue", "black", "red", "yellow", "green");
$arrNilai = array ("Ani" => 80, "Mudin" => 90, "Antum" => 75, "Budi" => 85);
echo "<pre>";
print_r ($arrwarna);
echo "<br>";
print_r  ($arrNilai);

?>