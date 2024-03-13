<?php
$nilai = 75;

if ($nilai >= 80) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} elseif ($nilai >= 60) {
    $grade = "C";
} else {
    $grade = "D";
}

echo "Nilai Anda: $nilai<br>";
echo "Grade Anda: $grade";
?>
