<?php
echo 'CONTOH BUILT-IN FUNCTION (Fungsi HTTP)' . '<br>';
echo '========================================' . '<br>';
// Mendapatkan nilai dari parameter GET
$parameter_get = isset($_GET['parameter']) ? $_GET['parameter'] : 'Tidak Ada';

// Menampilkan nilai parameter di browser
echo "Nilai parameter GET: " . $parameter_get;
?>
