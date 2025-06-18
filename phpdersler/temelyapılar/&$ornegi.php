<?php
//& referans operatörü daha çok bir değişkenin kopyasını almak gerekmediğinde kullanılır
$ad="yakup";
$ref1=&$ad;//ad değişkeninin adresini ref1 e verdik ikisi de aynı adresi taşıyor su an
echo $ref1;//çıktı:yakup
$ref1="kutlu";
echo $ad;//çıktı=kutlu olur çünkü iki değikende aynı adresi gösteriyor
echo "<hr>";
$a=5;
$b=&$a;
$a=7;
echo $a;
echo "<br>";
echo $b;
echo "<br>";
//ikisi de aynı değeri gösterir çünkü yine ikisi aynı adresi gösteriyor
$b=88; 
echo $b;
echo "<br>";
echo $a;
echo "<br>";

?>