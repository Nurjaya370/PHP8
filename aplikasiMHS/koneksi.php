<?php
$koneksi = mysqli_connect("localhost", "root", "", "mhs_db");

// Memeriksa koneksi database
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>