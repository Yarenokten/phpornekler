<?php
$dizi1=array("elma","armut","muz","portakal");
$dizi2=["elma","armut","muz","portakal"];
//elemanları tek tek atama
$dizi3[0]="elma";
$dizi3[1]="armut";
$dizi3[2]="muz";
$dizi3[3]="portakal";
//dizi anahtarı
//Her eleman, bir anahtar (key) ve değer (value) ikilisi olarak saklanır:
$kisiler = [
    "ad" => "Ali",
    "soyad" => "Yılmaz",
    "yas" => 25
];

echo $kisiler["ad"];    // Ali
echo $kisiler["yas"];   // 25
$ogrenci = ["ad" => "Zeynep", "yas" => 18];
echo "<hr>";
$anahtarlar = array_keys($ogrenci);
print_r($anahtarlar);
// Çıktı: Array ( [0] => ad [1] => yas )


?>