<?php
echo 'CONTOH VARIABEL STATIC' . '<br>';
echo '===============================' . '<br>';

function hitungJumlah() {
    static $total = 0;
    $total += 5; // Menambahkan nilai 5 setiap kali fungsi dipanggil
    return $total;
}

// Pemanggilan Fungsi
echo 'hasil penjumlahan pertama = '.hitungJumlah().'<br>';  // Output: 5
echo 'hasil penjumlahan kedua = '.hitungJumlah().'<br>';  // Output: 10
echo 'hasil penjumlahan ketiga = '.hitungJumlah();  // Output: 15
?>

