<?php

// Contoh menggunakan objek anonim untuk tuple
$tuple = (object) [
    "item1" => "Apel",
    "item2" => 42,
    "item3" => true
];

// Menampilkan nilai tuple
echo "Item 1: " . $tuple->item1 . "<br>";
echo "Item 2: " . $tuple->item2 . "<br>";
echo "Item 3: " . ($tuple->item3 ? 'true' : 'false') . "<br>";

?>
