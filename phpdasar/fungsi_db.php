<?php
$koneksi = mysqli_connect("localhost", "root", "", "db-kinerja");

// Memeriksa koneksi database
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}else {
    echo "database  terkoneksi...!!"."<br>";
}

$query = "SELECT nama FROM dataguru";
$result = mysqli_query($koneksi, $query);

// Memeriksa apakah query berhasil dijalankan
if (!$result) {
    die("Error dalam menjalankan query: " . mysqli_error($koneksi));
}

// Memeriksa apakah terdapat baris hasil query
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Nama Guru: " . $row['nama'];
} else {
    echo "Tidak ada data guru ditemukan.";
}

// Menutup koneksi
mysqli_close($koneksi);
?>
