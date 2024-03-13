<?php
print('***tipe data khusus object***'."<br>");
// Object
class Kendaraan {
    public $warna;
    public function klakson() {
        return "Tuuut!";
    }
}

$mobil = new Kendaraan();
$mobil->warna = "Merah";

// Mengakses properti dan metode objek
echo "Warna Mobil: " . $mobil->warna . "<br>";
echo "Bunyi Klakson: " . $mobil->klakson() . "<br>";
?>