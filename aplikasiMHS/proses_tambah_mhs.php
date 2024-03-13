<?php
// Include koneksi ke database
include 'koneksi.php';

// Ambil data dari form tambah_mhs.php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query untuk menyisipkan data ke dalam tabel mhs
$sql = "INSERT INTO mhs (nama, nim, tempat_lahir, tanggal_lahir, jenis_kelamin, Alamat) 
        VALUES ('$nama', '$nim', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat')";

if (mysqli_query($koneksi, $sql)) {
    // Simpan pesan dalam session
    session_start();
    $_SESSION['pesan'] = "Data berhasil ditambahkan";

    // Alirkan ke halaman HalMHS.php
    header("Location: HalMHS.php");
    exit; // Pastikan tidak ada output lain sebelum header() dipanggil
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
