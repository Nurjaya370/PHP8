<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>
<body>

<?php
$angka1 = 10;
$angka2 = 5;

// Sama dengan
$result1 = $angka1 == $angka2;  // false
$result2 = $angka1 === $angka2; // false

// Tidak sama dengan
$result3 = $angka1 != $angka2;  // true
$result4 = $angka1 !== $angka2; // true

// Kurang dari
$result5 = $angka1 < $angka2;   // false

// Lebih dari
$result6 = $angka1 > $angka2;   // true

// Kurang dari atau sama dengan
$result7 = $angka1 <= $angka2;  // false

// Lebih dari atau sama dengan
$result8 = $angka1 >= $angka2;  // true
?>

<h2>Hasil Operator Perbandingan</h2>
<p>Angka 1 adalah <?php echo $angka1; ?></p>
<p>Angka 2 adalah <?php echo $angka2; ?></p>

<p>Angka 1 == Angka 2: <?php echo $result1 ? 'true' : 'false'; ?></p>
<p>Angka 1 === Angka 2: <?php echo $result2 ? 'true' : 'false'; ?></p>

<p>Angka 1 != Angka 2: <?php echo $result3 ? 'true' : 'false'; ?></p>
<p>Angka 1 !== Angka 2: <?php echo $result4 ? 'true' : 'false'; ?></p>

<p>Angka 1 &lt; Angka 2: <?php echo $result5 ? 'true' : 'false'; ?></p>
<p>Angka 1 &gt; Angka 2: <?php echo $result6 ? 'true' : 'false'; ?></p>

<p>Angka 1 &lt;= Angka 2: <?php echo $result7 ? 'true' : 'false'; ?></p>
<p>Angka 1 &gt;= Angka 2: <?php echo $result8 ? 'true' : 'false'; ?></p>

</body>
</html>
