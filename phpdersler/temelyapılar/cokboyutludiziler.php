<?php
$matris = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matris[0][1]; // Çıktı: 2
echo $matris[2][0]; // Çıktı: 7
echo "<hr>";

//anahtar diziyle çok boyutlu dizi örneği
$urunler = [
    "Telefon" => [
        "fiyat" => 15000,
        "stok" => 25,
        "marka" => "Samsung"
    ],
    "Laptop" => [
        "fiyat" => 25000,
        "stok" => 12,
        "marka" => "HP"
    ]
];

echo $urunler["Telefon"]["marka"]; // Çıktı: Samsung
echo "<br>";
echo $urunler["Laptop"]["fiyat"];  // Çıktı: 25000
echo "<hr>";
//burada yapı şu şekildedir: Sınıf → Öğrenci → Ders → Not
$okul = [
    "9A" => [
        "Ali" => ["Matematik" => 85, "Türkçe" => 90],
        "Ayşe" => ["Matematik" => 78, "Türkçe" => 88]
    ],
    "10B" => [
        "Mehmet" => ["Matematik" => 92, "Türkçe" => 81],
    ]
];

echo $okul["9A"]["Ali"]["Matematik"]; // Çıktı: 85
echo "<hr>";


?>