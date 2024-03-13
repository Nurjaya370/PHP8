<?php
echo 'CONTOH BUILT-IN FUNCTION (Fungsi Email)' . '<br>';
echo '========================================' . '<br>';
// Tujuan email
$tujuan = "123@examples.com";

// Subjek email
$subjek = "Subjek Email";

// Isi pesan email
$pesan = "Isi email...";

// Mengirim email
mail($tujuan, $subjek, $pesan);

echo "Email berhasil dikirim ke: " . $tujuan;
?>
