<?php
$array1=array(4,42,23,16,15,8);
echo "dizinin eleman sayısı=".count($array1)."<br>";
//dizinin eleman sayısını sayar
echo "dizinin en büyük elemanı=".max($array1)."<br>";
echo "dizinin en küçük elemanı=".min($array1)."<br>";
print_r($array1);
echo "<br>";
sort($array1);
//PHP’de sort() fonksiyonu, bir dizinin elemanlarını küçükten büyüğe (artan sırada) sıralar. Bu işlem dizinin anahtarlarını (indexlerini) korumaz,
//  yani diziyi sıfırdan başlayarak yeniden indeksler.
echo "<br>";
print_r($array1);
echo "<br>";

?>