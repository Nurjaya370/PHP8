<?php
echo('<h2>'.'OPERATOR TAMBAHAN'.'</h2>');

echo('=====Operator Concatenation====='.'<br>');
$string1 = "Hello";
$string2 = "World";
$result = $string1 . $string2;
echo $result.'<br>';


echo(' =====Operator Null Coleascing====='.'<br>'); 
$variabel = null;
$nilai = $variabel ?? 0;
echo $nilai.'<br>'; 


echo('=====Operator Tenary====='.'<br>');
$usia = 20;
$status = ($usia >= 18) ? "Dewasa" : "Anak-anak";
echo $status.'<br>';  

echo('=====Operator Increment====='.'<br>');
$a = 5;
$a++;
echo $a.'<br>';  

echo(' =====Operator Decrement====='.'<br>');

$b = 10;
$b--;
echo $b.'<br>';


echo('Operator Concatenation====='.'<br>');
$string1 = "Hello";
$string1 .= " World";
echo $string1.'<br>';  

echo('=====Operator Spaceship====='.'<br>');
$a = 5;
$b = 10;
$result = $a <=> $b;
echo $result.'<br>';  

echo('=====Operator Error Control====='.'<br>');
$file = @file_get_contents('file.txt');
if ($file === false) {
    echo "File tidak dapat dibaca.";
} else {
    echo $file;
}
?>