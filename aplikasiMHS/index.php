<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Mengambil koneksi database
include 'koneksi.php';

// Mengambil data mahasiswa dari tabel mhs
$sql = "SELECT * FROM mhs";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Data Mahasiswa</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama</th><th>NIM</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Jenis Kelamin</th><th>Alamat</th></tr>";
    // Output data setiap baris
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id_mhs"]. "</td><td>" . $row["nama"]. "</td><td>" . $row["nim"]. "</td><td>" . $row["tempat_lahir"]. "</td><td>" . $row["tanggal_tahun_lahir"]. "</td><td>" . $row["jenis_kelamin"]. "</td><td>" . $row["Alamat"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($koneksi);
?>

</body>
</html>
