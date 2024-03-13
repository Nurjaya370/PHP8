<?php include 'css2.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="content">
    <h2>Tambah Data Mahasiswa</h2>

    <form action="proses_tambah_mhs.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <input type="submit" value="Simpan">
    </form>
</div>

</body>
</html>
