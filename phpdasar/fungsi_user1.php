<?php
echo 'CONTOH USER DEFINITION FUNCTION (Fungsi Dengan Parameter)' . '<br>';
echo '========================================================' . '<br>';

// Fungsi dengan parameter
function sapa($nama) {
    echo "Halo, $nama!".'<br>';
}

// Menggunakan fungsi dengan parameter
sapa("John"); // Output: Halo, John!
sapa("Jane"); // Output: Halo, Jane!
?>
