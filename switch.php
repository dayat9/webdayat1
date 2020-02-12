<?php
$day = "Mon";
switch ($day) {
    case 'Sun' : $hari = "Minggu"; break;
    case 'Mon' : $hari = "Senin"; break;
    case 'Tue' : $hari = "Selasa"; break;
    case 'Wed' : $hari = "Rabu"; break;
    case 'Thu' : $hari = "Kamis"; break;
    case 'Fri' : $hari = "Jum'at"; break;
    case 'Sat' : $hari = "Sabtu"; break;
    default    : $hari = "Kiamat";
}
echo "Hari ini hari <b>$hari</b>";
?>

<br>

<?php
$tahun = ("2045");
$kabisat = ($tahun%4 == 0) ? "kabisat" : "Bukan Kabisat";
echo "Tahun <b>$tahun</b> $kabisat";

?>