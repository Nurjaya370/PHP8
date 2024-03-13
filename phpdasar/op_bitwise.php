<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Bitwise</title>
</head>
<body>

<?php
$angka1 = 5;   // binary: 0101
$angka2 = 3;   // binary: 0011

// Operator AND
$result1 = $angka1 & $angka2;  // binary result: 0001 (decimal: 1)

// Operator OR
$result2 = $angka1 | $angka2;  // binary result: 0111 (decimal: 7)

// Operator XOR
$result3 = $angka1 ^ $angka2;  // binary result: 0110 (decimal: 6)

// Operator NOT
$result4 = ~$angka1;           // binary result: 11111111111111111111111111111010 (32-bit signed integer)

// Operator Shift Kiri
$result5 = $angka1 << 1;        // binary result: 1010 (decimal: 10)

// Operator Shift Kanan
$result6 = $angka1 >> 1;        // binary result: 0010 (decimal: 2)
?>

<h2>Hasil Operator Bitwise</h2>
<p>Angka 1 (binary): <?php echo decbin($angka1); ?></p>
<p>Angka 2 (binary): <?php echo decbin($angka2); ?></p>

<p>Angka 1 & Angka 2: <?php echo decbin($result1); ?> (<?php echo $result1; ?>)</p>
<p>Angka 1 | Angka 2: <?php echo decbin($result2); ?> (<?php echo $result2; ?>)</p>
<p>Angka 1 ^ Angka 2: <?php echo decbin($result3); ?> (<?php echo $result3; ?>)</p>
<p>~Angka 1: <?php echo decbin($result4); ?> (<?php echo $result4; ?>)</p>
<p>Angka 1 << 1: <?php echo decbin($result5); ?> (<?php echo $result5; ?>)</p>
<p>Angka 1 >> 1: <?php echo decbin($result6); ?> (<?php echo $result6; ?>)</p>

</body>
</html>
