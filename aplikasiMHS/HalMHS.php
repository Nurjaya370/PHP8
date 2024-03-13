<?php include 'css1.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'ceklogin.php'; ?>

<div class="content">
    <?php
    // Mulai session
    session_start();

    // Periksa apakah ada pesan dalam session
    if (isset($_SESSION['pesan'])) {
        echo "<p>" . $_SESSION['pesan'] . "</p>";
        
        // Hapus pesan dari session setelah ditampilkan
        unset($_SESSION['pesan']);
    }

    // Mengambil koneksi database
    include 'koneksi.php';

    // Mengambil data mahasiswa dari tabel mhs
    $sql = "SELECT id_mhs, nama, nim FROM mhs";
    $result = mysqli_query($koneksi, $sql);

    echo "<h2>Data Mahasiswa</h2>";

    // Tombol tambah data
    echo "<a href='tambah_mhs.php' class='btn'>Tambah Data</a><br><br>";

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Nama</th><th>NIM</th><th>Aksi</th></tr>";
        // Output data setiap baris
        while($row = mysqli_fetch_assoc($result)) 
        {
            echo "<tr><td>" . $row["nama"]. "</td><td>" . $row["nim"]. "</td>";
            // Tambahkan tombol view, edit, dan delete dengan parameter id_mhs
            echo "<td><a href='view_mhs.php?id=" . $row["id_mhs"] . "' class='btn'>View</a> 
                    <a href='edit_mhs.php?id=" . $row["id_mhs"] . "' class='btn btn-edit'>Edit</a> 
                    <a href='delete_mhs.php?id=" . $row["id_mhs"] . "' class='btn btn-delete'>Delete</a>
                    </td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    mysqli_close($koneksi);
    ?>
</div>

</body>
</html>
