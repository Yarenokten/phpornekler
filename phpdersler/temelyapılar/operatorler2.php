<?php
$x=10;
$x+=4;
echo "x'in yeni değeri: " .$x;
echo "<hr>";
$x-=4;
echo "x'in yeni değeri: " .$x;
echo "<hr>";
$y=6;
$y*=2;
echo "y'in yeni değeri: " .$y;
$a=20;
$a++;
echo "<hr>";
echo "a'in yeni değeri: " .$a;
$b=20;
$b--;
echo "<hr>";
echo "b'in yeni değeri: " .$b;
$z=7;
$d=5;
echo "<hr>";

if($z==$d){
    echo "z ve d'nin değeri birbirine eşittir ve sonuc: ".$z;
}
else{
    echo "z ve d değerleri birbirlerine eşit değildir:";
}
echo "<hr>";
$sonuc=($z==$d);
echo $sonuc ? 'true':'false';
$puan=50;
$sorgu=($puan >=50)?"öğrenci geçti":"öğrenci kaldı";
echo "<hr>";
echo $sorgu;

?>