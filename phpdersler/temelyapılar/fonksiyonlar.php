<?php
//fonksiyon isimlerinin içinde rakam kullanabilirim ama başında veya sonunda kullanamam
//büyük küçük harf kullanabilirim ve _listeleme yapabilirim
function listeleme(){
    echo "merhaba";;
}
//listeleme();
function toplama(){
    $sayi=5;
    $sayi2=4;
    $sonuc=$sayi+$sayi2;
    echo $sonuc;
}
toplama();
echo "<hr>";
function Toplamaa($sayi1,$sayi2){
    $sonuc=$sayi1+$sayi2;
    echo $sonuc;

}
Toplamaa(5,6);
?>