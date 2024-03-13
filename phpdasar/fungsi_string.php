<?php
echo 'CONTOH BUILT-IN FUNCTION (Fungsi STRING)' . '<br>';
echo '========================================' . '<br>'; 
$teks = "Hello, World!";
echo strlen($teks).'<br>'; // Mengembalikan panjang string 
echo str_replace("Hello", "Hi", $teks).'<br>'; // Mengganti substring 
echo strtolower($teks); // Mengubah string menjadi huruf kecil 
?> 