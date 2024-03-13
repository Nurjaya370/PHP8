<?php
// Mengambil koneksi database
include 'koneksi.php';

// Mendapatkan id mahasiswa dari parameter GET
$id_mhs = $_GET['id'];

// Jika form disubmit, proses perubahan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // Query untuk melakukan update data mahasiswa
    $sql = "UPDATE mhs SET nama='$nama', nim='$nim', tempat_lahir='$tempat_lahir', 
    tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', 
    Alamat='$alamat' WHERE id_mhs='$id_mhs'";

    if (mysqli_query($koneksi, $sql)) {
        // Simpan pesan dalam session
        session_start();
        $_SESSION['pesan'] = "Data mahasiswa berhasil diubah.";

        // Alirkan ke halaman HalMHS.php
        header("Location: HalMHS.php");
        exit; // Pastikan tidak ada output lain sebelum header() dipanggil
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

// Query untuk mengambil data mahasiswa berdasarkan id
$sql = "SELECT * FROM mhs WHERE id_mhs = $id_mhs";
$result = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($result) > 0) {
    // Output form untuk mengubah data
    while($row = mysqli_fetch_assoc($result)) {
?>
<?php include 'css2.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <h2>Edit Data Mahasiswa</h2>

    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?php echo $row['nim']; ?>" required>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Pria" <?php if ($row['jenis_kelamin'] == 'Pria') echo 'selected'; ?>>Pria</option>
            <option value="Wanita" <?php if ($row['jenis_kelamin'] == 'Wanita') echo 'selected'; ?>>Wanita</option>
        </select>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $row['Alamat']; ?>" required>

        <input type="submit" value="Simpan">
    </form>
</div>
</body>
</html>
<?php
    }
} else {
    echo "Data mahasiswa tidak ditemukan.";
}

mysqli_close($koneksi);
?>
