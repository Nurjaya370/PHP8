<?php
echo 'CONTOH BUILT-IN FUNCTION (Fungsi xml)' . '<br>';
echo '========================================' . '<br>';

// Membaca file XML
$xml = simplexml_load_file("contoh.xml");

// Memeriksa apakah file XML berhasil dimuat
if ($xml === false) {
    die("Error loading XML file");
}

// Menampilkan semua elemen XML
foreach ($xml->children() as $element) {
    echo "Isi elemen XML: " . $element . '<br>';
}
?>
