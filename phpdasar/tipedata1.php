<?php
// Integer
$umur = 25;

// Float (Double)
$harga = 3.99;

// String
$nama = "John";

// Boolean
$status = true;

// NULL
$variabel_kosong = null;

// Menampilkan nilai variabel
echo "Umur: " . $umur . "<br>";
echo "Harga: " . $harga . "<br>";
echo "Nama: " . $nama . "<br>";
echo "Status: " . ($status ? 'Aktif' : 'Tidak Aktif') . "<br>";
echo "Variabel Kosong: " . var_export($variabel_kosong, true) . "<br>";
?>