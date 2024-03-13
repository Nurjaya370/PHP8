<?php

// Contoh 1: Fungsi yang selalu melempar pengecualian
function throwError(): never {
    throw new Exception('Error occurred');
}

// Contoh 2: Fungsi dengan loop yang tidak pernah berakhir
function infiniteLoop(): never {
    while (true) {
        // ...
    }
}

// Coba panggil fungsi throwError (akan menyebabkan pengecualian)
try {
    throwError();
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
}

// Coba panggil fungsi infiniteLoop (akan menyebabkan skrip terjebak dalam loop)
// infiniteLoop(); // Aktifkan baris ini akan menyebabkan skrip tidak pernah selesai dieksekusi

?>
