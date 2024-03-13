<?php include 'css1.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="content">
    <?php
    // Mengambil koneksi database
    include 'koneksi.php';

    // Mendapatkan id mahasiswa dari parameter GET
    $id_mhs = $_GET['id'];

    // Query untuk mengambil data mahasiswa berdasarkan id
    $sql = "SELECT * FROM mhs WHERE id_mhs = $id_mhs";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data dari setiap baris
        while($row = mysqli_fetch_assoc($result)) {
            echo "<h2>Detail Mahasiswa</h2>";
            echo "<p><strong>Nama:</strong> " . $row["nama"] . "</p>";
            echo "<p><strong>NIM:</strong> " . $row["nim"] . "</p>";
            echo "<p><strong>Tempat, Tanggal Lahir:</strong> " . $row["tempat_lahir"] . ", " . $row["tanggal_lahir"] . "</p>";
            echo "<p><strong>Jenis Kelamin:</strong> " . $row["jenis_kelamin"] . "</p>";
            echo "<p><strong>Alamat:</strong> " . $row["Alamat"] . "</p>";
        }
    } else {
        echo "Data mahasiswa tidak ditemukan.";
    }

    mysqli_close($koneksi);
    ?>
</diV>
</body>
</html>
