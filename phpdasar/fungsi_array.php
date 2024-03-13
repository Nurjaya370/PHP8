<?php
echo 'CONTOH BUILT-IN FUNCTION (Fungsi Array)' . '<br>';
echo '=======================================' . '<br>'; 
$angka = [1, 2, 3, 4, 5];
echo ('jumlah elemen array = '.count($angka).'<br>');
array_push($angka, 6);
print_r($angka);
?>
