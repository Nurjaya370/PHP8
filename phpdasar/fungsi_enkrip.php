<?php
echo 'CONTOH BUILT-IN FUNCTION (Fungsi encrypt)' . '<br>';
echo '========================================' . '<br>';
// Sandi rahasia
$password = "sandi_rahasia";

// Menghasilkan hash password
$hash = password_hash($password, PASSWORD_BCRYPT);

// Menampilkan hash password di browser
echo "Hash Password: " . $hash.'<br>';

// Memverifikasi password
$cek = password_verify($password, $hash);

// Menampilkan hasil verifikasi di browser
echo "Password divalidasi: " . ($cek ? 'Valid' : 'Tidak Valid');
?>
