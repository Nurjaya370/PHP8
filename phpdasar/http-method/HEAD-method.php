<?php
$url = "https://example.com/resource/1";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_NOBODY, true); // Mengatur opsi CURLOPT_NOBODY untuk menggunakan metode HEAD
curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Mendapatkan status code dari respons
curl_close($ch);

echo "Status Code: " . $statusCode;
?>
