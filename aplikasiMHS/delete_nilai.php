<?php
// Mengambil koneksi database
include 'koneksi.php';

// Mendapatkan id mahasiswa dari parameter GET
$id_nilai = $_GET['id'];

// Query untuk menghapus data mahasiswa berdasarkan id
$sql = "DELETE FROM nilai WHERE id_nilai = $id_nilai";

if (mysqli_query($koneksi, $sql)) {
    // Jika data berhasil diubah, redirect ke halaman nilai
    header("Location: nilai.php?pesan=Data berhasil dihapus");
    exit();
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
