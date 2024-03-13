<?php
echo 'CONTOH VARIABEL GLOBAL' . '<br>';
echo '===============================' . '<br>';
$a=7;
$b=1;
function hasil(){
global $a;
global $b;
$hasil=($a+$b)/2; 
return $hasil;
}

//memanggil variabel global dari luar fungsi 
echo "Hasil = " . hasil();
?>

