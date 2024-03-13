<?php
// Mengambil koneksi database
include 'koneksi.php';

// Mendapatkan id mahasiswa dari parameter GET
$id_mhs = $_GET['id'];

// Query untuk menghapus data mahasiswa berdasarkan id
$sql = "DELETE FROM mhs WHERE id_mhs = $id_mhs";

if (mysqli_query($koneksi, $sql)) {
    // Simpan pesan dalam session
    session_start();
    $_SESSION['pesan'] = "Data mahasiswa berhasil dihapus.";

    // Alirkan ke halaman HalMHS.php
    header("Location: HalMHS.php");
    exit; // Pastikan tidak ada output lain sebelum header() dipanggil
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
