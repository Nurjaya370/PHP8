<?php
echo 'CONTOH VARIABEL LOKAL' . '<br>';
echo '===============================' . '<br>';
$a=7;
$b=2;
function hasil(){
//membuat variabel lokal
$a=5;
$b=5;
$hasil=$a*($a+$b);
return $hasil;
}

//memanggil variabel lokal dari luar fungsi 
echo "Hasil = " . hasil();
?>
