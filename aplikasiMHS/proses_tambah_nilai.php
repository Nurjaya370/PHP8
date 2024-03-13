<?php
// Include koneksi ke database
include 'koneksi.php';

// Tangkap data dari formulir tambah data nilai
$id_mhs = $_POST['id_mhs'];
$kd_matkul = $_POST['kd_matkul'];
$mata_kuliah = $_POST['mata_kuliah'];
$bobot = $_POST['bobot'];
$nilai = $_POST['nilai'];
$grade = $_POST['grade'];
$status = $_POST['status'];

// Query untuk menyisipkan data ke dalam tabel nilai
$sql = "INSERT INTO nilai (id_mhs, kd_matkul, mata_kuliah, bobot, nilai, grade, status) 
        VALUES ('$id_mhs', '$kd_matkul', '$mata_kuliah', '$bobot', '$nilai', '$grade', '$status')";

if (mysqli_query($koneksi, $sql)) {
    // Notifikasi data berhasil disimpan
    echo "<script>alert('Data nilai berhasil ditambahkan.'); window.location.href='nilai.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
