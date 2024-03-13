<?php
echo'CONTOH BUILT-IN FUNCTION (DATE & TIME)'.'<br>';
echo'========================================'.'<br>';
echo ('hari ini tanggal '.date("Y-m-d H:i:s").'<br>'); // Menampilkan tanggal dan waktu saat ini
echo 'besok tanggal ' . date("Y-m-d H:i:s", strtotime("tomorrow")).'<br>';
echo 'timestamp saat ini ' . date("Y-m-d H:i:s", time()).'<br>';
?>