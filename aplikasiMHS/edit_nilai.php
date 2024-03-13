<?php include 'css2.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <h2>Edit Data Nilai</h2>

    <?php
    // Include koneksi ke database
    include 'koneksi.php';

    // Tangkap id nilai dari parameter GET
    $id_nilai = $_GET['id'];

    // Query untuk mengambil data nilai berdasarkan id
    $sql = "SELECT * FROM nilai WHERE id_nilai = $id_nilai";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output form untuk mengedit data
        while($row = mysqli_fetch_assoc($result)) {
            // Query untuk mengambil nama mahasiswa berdasarkan id_mhs
            $sql_mhs = "SELECT nama FROM mhs WHERE id_mhs = " . $row['id_mhs'];
            $result_mhs = mysqli_query($koneksi, $sql_mhs);
            $nama_mhs = "";

            if (mysqli_num_rows($result_mhs) > 0) {
                $row_mhs = mysqli_fetch_assoc($result_mhs);
                $nama_mhs = $row_mhs['nama'];
            }
    ?>
            <form method="post" action="proses_edit_nilai.php">
                <input type="hidden" name="id_nilai" value="<?php echo $row['id_nilai']; ?>">
                <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']; ?>"> 
                <!-- Tambahkan input hidden untuk menyimpan id_mhs -->
                <label>ID Mahasiswa:</label><br>
                <input type="text" value="<?php echo $nama_mhs; ?>" readonly><br>
                <label for="kd_matkul">Kode Mata Kuliah:</label><br>
                <input type="text" id="kd_matkul" name="kd_matkul" value="<?php echo $row['kd_matkul']; ?>"><br>
                <label for="mata_kuliah">Mata Kuliah:</label><br>
                <input type="text" id="mata_kuliah" name="mata_kuliah" value="<?php echo $row['mata_kuliah']; ?>"><br>
                <label for="bobot">Bobot:</label><br>
                <input type="text" id="bobot" name="bobot" value="<?php echo $row['bobot']; ?>"><br>
                <label for="nilai">Nilai:</label><br>
                <input type="text" id="nilai" name="nilai" value="<?php echo $row['nilai']; ?>"><br>
                <label for="grade">Grade:</label><br>
                <input type="text" id="grade" name="grade" value="<?php echo $row['grade']; ?>"><br>
                <label for="status">Status:</label><br>
                <input type="text" id="status" name="status" value="<?php echo $row['status']; ?>"><br><br>
                <input type="submit" value="Simpan">
            </form>
    <?php
        }
    } else {
        echo "Data nilai tidak ditemukan.";
    }

    mysqli_close($koneksi);
    ?>
</div>
</body>
</html>
