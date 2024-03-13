<?php
// Include koneksi ke database
include 'koneksi.php';

// Tangkap data yang dikirim melalui metode POST
$id_nilai = $_POST['id_nilai'];
// Ambil nilai id_mhs dari form
$id_mhs = $_POST['id_mhs']; 
$kd_matkul = $_POST['kd_matkul'];
$mata_kuliah = $_POST['mata_kuliah'];
$bobot = $_POST['bobot'];
$nilai = $_POST['nilai'];
$grade = $_POST['grade'];
$status = $_POST['status'];

// Query untuk melakukan update data nilai
$sql = "UPDATE nilai SET id_mhs='$id_mhs', kd_matkul='$kd_matkul', 
mata_kuliah='$mata_kuliah', bobot='$bobot', nilai='$nilai', 
grade='$grade', status='$status' WHERE id_nilai='$id_nilai'";

if (mysqli_query($koneksi, $sql)) {
    // Jika data berhasil diubah, redirect ke halaman nilai
    header("Location: nilai.php?pesan=Data berhasil diubah");
    exit();
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
