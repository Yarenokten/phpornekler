<?php
$dizi["adi"]="yakup kutlu";
$dizi["tel"]="054443554";
$dizi["bolum"]="bilgisayar mühendisliği";
echo "<br>";
foreach($dizi as $deger){
    //dizinin adı as geçici değer ataması
    echo $deger;//dizi elemanlarının gezilip ekrana yazdırılması
    echo " <br>";
}
?>