<?php
echo 'CONTOH BUILT-IN FUNCTION (Fungsi JSON)' . '<br>';
echo '========================================' . '<br>';
// Mengkonversi array ke JSON
$data = ['nama' => 'John', 'usia' => 25];
$json_data = json_encode($data);

// Menampilkan JSON di browser
echo "Data JSON: " . $json_data;

// Mengkonversi JSON ke array
$array_data = json_decode($json_data, true);
?>
