<?php
echo 'MENGGUNAKAN NESTED LOOP - for' . '<br>';
echo 'SEGITIGA SIKU-SIKU' . '<br>';
$batas= '*****************************' . '<br>';
echo $batas;
$tinggi = 5;

for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo '<br>'; // Menggunakan tag <br> untuk baris baru setelah setiap baris dari segitiga
}
echo $batas;
echo 'SEGITIGA SAMA KAKI' . '<br>';
echo $batas;
for ($i = 1; $i <= $tinggi; $i++) {
    // Loop untuk spasi sebelum angka
    for ($k = $tinggi - $i; $k > 0; $k--) {
        echo '&nbsp;&nbsp;';
    }

    // Loop untuk mencetak angka
    for ($j = 1; $j <= $i * 2 - 1; $j++) {
        echo $j;
    }

    echo '<br>'; // Baris baru setelah setiap baris dari segitiga
}
echo $batas;

?>
