<?php
$hari = "Selasa";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah hari kerja pertama.";
        break;

    case "Selasa":
    case "Rabu":
        echo "Hari ini adalah hari kerja di pertengahan minggu.";
        break;

    case "Kamis":
    case "Jumat":
        echo "Hari ini adalah hari kerja menjelang akhir minggu.";
        break;

    default:
        echo "Hari ini adalah hari libur.";
}
?>