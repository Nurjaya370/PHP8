<?php
echo 'CONTOH BUILT-IN FUNCTION (FILE SYSTEM)' . '<br>';
echo '========================================' . '<br>';

// Membaca konten dari file
$konten = file_get_contents("contoh.txt");
echo "Konten File: " . $konten . '<br>';

// Memeriksa apakah file ada
if (file_exists("contoh.txt")) {
    echo "File Ada" . '<br>';
} else {
    echo "File Tidak Ada" . '<br>';
}

// Menghapus file
if (unlink("contoh.txt")) {
    echo "File Berhasil Dihapus" . '<br>';
} else {
    echo "Gagal Menghapus File" . '<br>';
}
?>
