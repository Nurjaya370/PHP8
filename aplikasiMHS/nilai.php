<?php include 'css1.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <h2>Data Nilai Mahasiswa</h2>

    <?php
    // Cek apakah ada pesan notifikasi dari URL
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        echo "<script>alert('$pesan');</script>";
    }

    // Include koneksi ke database
    include 'koneksi.php';
    // Tombol tambah data
    echo "<a href='tambah_nilai.php' class='btn'>Tambah Data Nilai</a><br></br>";
    // Query untuk mengambil data nilai mahasiswa
    $sql = "SELECT nilai.id_nilai, nilai.id_mhs, mhs.nama, nilai.kd_matkul, 
    nilai.mata_kuliah, nilai.bobot, nilai.nilai, nilai.grade, 
    nilai.status FROM nilai INNER JOIN mhs ON nilai.id_mhs = mhs.id_mhs";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID Mahasiswa</th><th>Nama Mahasiswa</th><th>Kode Matkul</th>
        <th>Mata Kuliah</th><th>Bobot</th><th>Nilai</th><th>Grade</th><th>Status</th><th>Aksi</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id_mhs"]. "</td><td>" . $row["nama"]. "</td><td>" . $row["kd_matkul"]. 
            "</td><td>" . $row["mata_kuliah"]. "</td><td>" . $row["bobot"]. "</td><td>" . $row["nilai"]. 
            "</td><td>" . $row["grade"]. "</td><td>" . $row["status"]. "</td>";
            // Tambahkan tombol edit, delete dengan parameter id_nilai
            echo "<td><a href='edit_nilai.php?id=" . $row["id_nilai"] . 
            "' class='btn btn-edit'>Edit</a> <a href='delete_nilai.php?id=" . $row["id_nilai"] . 
            "' class='btn btn-delete'>Delete</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data nilai.";
    }

    mysqli_close($koneksi);
    ?>
</div>
</body>
</html>
