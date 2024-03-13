<?php
print('***tipe data khusus resource***'."<br>");
// Resource
$koneksi_database = mysqli_connect("localhost", "root", "", "kinerja");

// Mengecek koneksi database
if ($koneksi_database) {
    echo "Koneksi database berhasil.<br>";
} else {
    echo "Koneksi database gagal.<br>";
}

// Menutup koneksi database
mysqli_close($koneksi_database);
?>