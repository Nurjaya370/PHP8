<?php
$nilai = 75;
$absen = 60;

if ($nilai >= 70) {
    echo "Anda lulus mata pelajaran.";

    if ($absen >= 75) {
        echo " Kehadiran Anda baik.";
    } else {
        echo " Kehadiran Anda kurang, tetapi tetap lulus.";
    }

} elseif ($nilai >= 60) {
    echo "Anda mendapatkan perbaikan.";

} else {
    echo "Anda tidak lulus mata pelajaran.";
}
?>
