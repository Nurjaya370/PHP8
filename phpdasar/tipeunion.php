<?php

// Mixed dan Union Types
function gabung_string(int|string $nilai): string {
    return "Nilai: $nilai";
}

// Penggunaan Mixed dan Union Types
echo gabung_string(42) . "<br>";        // Output: Nilai: 42
echo gabung_string("Empat Puluh Dua"); // Output: Nilai: Empat Puluh Dua

?>