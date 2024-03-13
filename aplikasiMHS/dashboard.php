<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Ambil nama pengguna dari sesi
$username = $_SESSION['username'];
?>

<?php include 'css1.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="content">
    <h2 style="text-transform: uppercase;"><?php echo "<h2>$username</h2>"; ?></h2>
    <p>Selamat datang di halaman dashboard.
        Silakan pilih menu di sidebar untuk mengakses data mahasiswa dan nilai.
    </p>
</div>

</body>
</html>
