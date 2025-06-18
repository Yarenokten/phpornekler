<?php
//dizideki her elemanı tek tek alarak işlem yapmak için kullanılır
//geriye ise filtrelenmiş bir dizi döner
$arr=[2,3,4,5];
array_filter($arr,function($a){
    return $a>2&&$a<5;
});
/*✅ Ne Yapar?
Dizinin her elemanını tek tek kontrol eder.

Koşula uymayanları atar, uygun olanları yeni bir diziye ekler.

Yeni (filtrelenmiş) bir dizi döndürür.
o zaman bu kodun çıktısı şu şekilde olmalıdır:
3 ve 4 yani yeni filtrelenmiş dizi [3,4] olur.
ama Not: Dikkat ettiysen anahtarlar (indexler) korunuyor (1, 2).
yani yeni dizi:
Array(
[1]=>3,
[2]=>4,
)
İstersen array_values() ile bunları sıfırlayabilirsin:
*/ 
echo "<hr>";
echo "<br>";

?>
<?php
//array_values() ile sıfırlanmış hali:
$arr1 = [2, 3, 4, 5];

$yeniDizi = array_filter($arr1, function($a){
    return $a > 2 && $a < 5;
});

print_r($yeniDizi);
echo "<br>";
$duzgunDizi = array_values($yeniDizi);
print_r($duzgunDizi);
// Çıktı: Array ( [0] => 3 [1] => 4 )
?>
