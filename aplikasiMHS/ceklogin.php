<?php
session_start();

// Periksa apakah pengguna telah login
if(!isset($_SESSION['username'])) {
    // Jika belum, alihkan kembali ke halaman login
    header("Location: login.php");
    exit; // Pastikan kode setelah redirect tidak dijalankan
}
?>
