<?php
echo 'CONTOH USER DEFINITION FUNCTION (Fungsi Dengan Nilai Default)' . '<br>';
echo '=============================================================' . '<br>';
// Fungsi dengan nilai default
function sapa_pengguna($nama = "Pengguna") {
    echo "Halo, $nama!";
}

// Menggunakan fungsi dengan nilai default
sapa_pengguna(); // Output: Halo, Pengguna!
sapa_pengguna("John"); // Output: Halo, John!
?>
