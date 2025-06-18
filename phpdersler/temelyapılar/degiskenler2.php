<?php
$ad="mehmet";
$soyadi="kahraman";
echo $ad;
echo $soyadi;
echo "<hr>";
$metin="merhaba ben : $ad $soyadi";
echo $metin;
echo "<hr>";
$metin="merhaba ben : {$ad} {$soyadi}";
echo $metin;
echo "<hr>";
$sonuc=$ad.$soyadi;
$sonuc2=$ad. " ".$soyadi;
echo $sonuc;
echo "<br>";
echo $sonuc2;
/// referansa bağlı değer atama
$a=5;
$p=$a;
echo "a'nın değeri $a";
echo"<br>";
echo "b'nin değeri {$p}";
$a=10;
echo "<br>";
echo "a'nin yeni değeri: {$a}";
echo "<br>";
echo "p'nin yeni değeri: {$p}";
?>