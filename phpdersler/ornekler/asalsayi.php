<?php
//asal sayı bulalım 1-100
// 1 ve kendisine bölünen sayıdır
//99 sayısı için 1-99 sadece 2 tane sayı için kalan 0 olmalı
$sayi=97;
$durum=0;
for($i=1;$i<=99;$i++){
    $kalan=$sayi%$i;
    if($kalan==0){
       $durum++;
       echo $i."-durum değeri:".$durum."<br>";
    }
    
}
if($durum==2){
    echo $sayi."asaldır";
}
else{
    echo "asal değildir";
}

?>