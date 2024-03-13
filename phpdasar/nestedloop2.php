<?php
echo 'MENGGUNAKAN NESTED LOOP - while' . '<br>';
echo 'SEGITIGA SIKU-SIKU' . '<br>';
$batas = '*****************************' . '<br>';
echo $batas;
$tinggi = 5;

$i = 1;
while ($i <= $tinggi) {
    $j = 1;
    while ($j <= $i) {
        echo $j . " ";
        $j++;
    }
    echo '<br>';
    $i++;
}
echo $batas;

echo 'SEGITIGA SAMA KAKI' . '<br>';
echo $batas;

$i = 1;
while ($i <= $tinggi) {
    // Loop untuk spasi sebelum angka
    $k = $tinggi - $i;
    while ($k > 0) {
        echo '&nbsp;&nbsp;';
        $k--;
    }

    // Loop untuk mencetak angka
    $j = 1;
    while ($j <= $i * 2 - 1) {
        echo $j;
        $j++;
    }

    echo '<br>';
    $i++;
}

echo $batas;
?>
