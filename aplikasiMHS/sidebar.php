<div class="sidebar">
    <a href="dashboard.php" <?php if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') 
    echo 'class="active"'; ?>>Dashboard</a>
    <a href="nilai.php" <?php if (basename($_SERVER['PHP_SELF']) == 'nilai.php') 
    echo 'class="active"'; ?>>Data Nilai</a>
    <a href="HalMHS.php" <?php if (basename($_SERVER['PHP_SELF']) == 'HalMHS.php') 
    echo 'class="active"'; ?>>Data Mahasiswa</a>
    <a href="logout.php">Logout</a>
</div>
