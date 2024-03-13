<?php
echo 'MENGGUNAKAN NESTED LOOP - Kombinasi for dan while' . '<br>';
$tinggi = 5;

// Nested loop dengan kombinasi for dan while
for ($i = 1; $i <= $tinggi; $i++) {
    // Loop while untuk mengatur spasi sebelum angka
    $k = $tinggi - $i;
    while ($k > 0) {
        echo '&nbsp;&nbsp;';
        $k--;
    }

    // Loop for untuk mencetak angka
    for ($j = 1; $j <= $i * 2 - 1; $j++) {
        echo $j;
    }

    echo '<br>'; // Baris baru setelah setiap baris dari segitiga
}
?>
