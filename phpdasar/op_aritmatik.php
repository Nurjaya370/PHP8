<?php
$a = 10;
$b = 3;
$penjumlahan = $a + $b; 
$pengurangan = $a - $b;
$perkalian = $a * $b;     
$pembagian   = $a / $b;     
$sisa  = $a % $b;    
$pangkat = $a ** $b;   
$pemangkatan = pow($a, $b); 
echo('<h2>'.'OPERATOR ARITMATIKA'.'</h2>');
echo('hasil dari '.$a.' ditambah '.$b.' adalah '.$penjumlahan.'<br>');
echo('hasil dari '.$a.' dikurang '.$b.' adalah '.$pengurangan.'<br>');
echo('hasil dari '.$a.' dikali '.$b.' adalah '.$perkalian.'<br>');
echo('hasil dari '.$a.' dibagi '.$b.' adalah '.$pembagian.'<br>');
echo('sisa dari '.$a.' dibagi '.$b.' adalah '.$sisa.'<br>');
echo('hasil dari '.$a.' pangkat '.$b.'  adalah '.$pangkat.'<br>');
echo('hasil dari '.$a.' pemangkatan '.$b.' adalah '.$pemangkatan.'<br>');
?>
