<?php
echo 'CONTOH USER DEFINITION FUNCTION (Fungsi Dengan Nilai Kembalian)' . '<br>';
echo '==============================================================' . '<br>';
// Fungsi dengan nilai kembalian
function kuadrat($angka) {
    return $angka * $angka;
}
// Menggunakan fungsi dengan nilai kembalian
$hasil_kuadrat = kuadrat(4); // Output: 16
echo "Hasil Kuadrat: " . $hasil_kuadrat;
?>
