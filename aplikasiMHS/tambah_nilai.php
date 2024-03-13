<?php include 'css2.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <h2>Tambah Data Nilai Mahasiswa</h2>

    <form action="proses_tambah_nilai.php" method="post">
        <label for="id_mhs">ID Mahasiswa:</label><br>
        <select id="id_mhs" name="id_mhs" required>
            <?php
            // Include koneksi ke database
            include 'koneksi.php';

            // Query untuk mengambil data id_mhs dan nama mahasiswa dari tabel mhs
            $sql = "SELECT id_mhs, nama FROM mhs";
            $result = mysqli_query($koneksi, $sql);

            // Periksa apakah query berhasil dieksekusi
            if ($result && mysqli_num_rows($result) > 0) {
                // Tampilkan data dalam bentuk dropdown
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id_mhs'] . "'>" . $row['nama'] . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada data mahasiswa</option>";
            }

            // Tutup koneksi ke database
            mysqli_close($koneksi);
            ?>
        </select><br>
        <label for="kd_matkul">Kode Matkul:</label><br>
        <input type="text" id="kd_matkul" name="kd_matkul" required><br>
        <label for="mata_kuliah">Mata Kuliah:</label><br>
        <input type="text" id="mata_kuliah" name="mata_kuliah" required><br>
        <label for="bobot">Bobot:</label><br>
        <input type="text" id="bobot" name="bobot" required><br>
        <label for="nilai">Nilai:</label><br>
        <input type="text" id="nilai" name="nilai" required><br>
        <label for="grade">Grade:</label><br>
        <input type="text" id="grade" name="grade" required><br>
        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</div>
</body>
</html>
