<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logika</title>
</head>
<body>

<?php
$angka1 = 10;
$angka2 = 5;

// Operator AND
$result1 = ($angka1 > 5) && ($angka2 < 8);  // true

// Operator OR
$result2 = ($angka1 > 15) || ($angka2 < 3); // false

// Operator NOT
$result3 = !($angka1 == $angka2);           // true
?>

<h2>Hasil Operator Logika</h2>
<p>Angka 1: <?php echo $angka1; ?></p>
<p>Angka 2: <?php echo $angka2; ?></p>

<p>($angka1 > 5) && ($angka2 < 8): <?php echo $result1 ? 'true' : 'false'; ?></p>
<p>($angka1 > 15) || ($angka2 < 3): <?php echo $result2 ? 'true' : 'false'; ?></p>
<p>!($angka1 == $angka2): <?php echo $result3 ? 'true' : 'false'; ?></p>

</body>
</html>
