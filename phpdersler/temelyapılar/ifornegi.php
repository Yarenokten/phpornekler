<?php
/* 
E-ticaret sitesinde yapılan alışverişlerde 100 TL üzeri 
alışverişlerde kargo ücreti alınmamaktadır. 
Aksi durumda her sipariş için 26 TL kargo ücreti kesilmektedir.
*/

$urunAdi = "HDD";
$urunAdedi = 3;
$urunBirimFiyati = 23;

$toplamFiyat = $urunBirimFiyati * $urunAdedi;

echo "Ürün: $urunAdi <br>";
echo "Adet: $urunAdedi <br>";
echo "Birim Fiyat: $urunBirimFiyati TL <br>";
echo "Toplam Ürün Fiyatı: $toplamFiyat TL <br>";

if ($toplamFiyat > 100) {
    echo "Kargo Ücreti: Ücretsiz <br>";
    echo "Genel Toplam: $toplamFiyat TL";
} else {
    $kargoUcreti = 26;
    $genelToplam = $toplamFiyat + $kargoUcreti;
    echo "Kargo Ücreti: $kargoUcreti TL <br>";
    echo "Genel Toplam: $genelToplam TL";
}
?>
