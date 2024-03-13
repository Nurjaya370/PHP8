<?php
echo 'CONTOH BUILT-IN FUNCTION (Fungsi SESSION)' . '<br>';
echo '========================================' . '<br>';
// Memulai sesi
session_start();

// Menyimpan data dalam sesi
$_SESSION['user_id'] = 123;

// Menampilkan data sesi di browser
echo "User ID dari sesi: " . $_SESSION['user_id'];

// Menghapus sesi
session_destroy();
?>
