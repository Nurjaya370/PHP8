<?php
// Fungsi dengan Union Types pada parameter dan nilai kembalian
function hitung(int|float $a, int|float $b): int|float {
    return $a + $b;
}

// Contoh pemanggilan fungsi
$result = hitung(5, 3.14);
echo $result;

?>