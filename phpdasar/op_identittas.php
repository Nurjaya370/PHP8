<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Identitas</title>
</head>
<body>

<?php
$angka1 = 10;
$angka2 = "10";

// Sama dengan dan tipe data sama
$result1 = $angka1 === $angka2;  // false

// Tidak sama dengan atau tipe data tidak sama
$result2 = $angka1 !== $angka2;  // true
?>

<h2>Hasil Operator Identitas</h2>
<p>Angka 1: <?php echo $angka1; ?></p>
<p>Angka 2: <?php echo $angka2; ?></p>

<p>Angka 1 === Angka 2: <?php echo $result1 ? 'true' : 'false'; ?></p>
<p>Angka 1 !== Angka 2: <?php echo $result2 ? 'true' : 'false'; ?></p>

</body>
</html>
