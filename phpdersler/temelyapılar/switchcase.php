<?php
$gun=3;
switch($gun){
    case 1;
    echo "pazartesi";
    break;
    case 2;
    echo "salı";
    break;
    case 3;
    echo "carsamba";
    break;
    case 4;
    echo"persembe";
    break;
    case 5;
    echo "cuma";
    break;
    case 6;
    echo "cumartesi";
    break;
    case 7;
    echo "pazar";
    break;
    default;
    echo "gecersiz gun";
}
echo "<hr>";
$seviye="orta";
switch($seviye){
    case "baslangic";
    echo "baslangıc durumunda";
    break;
    case"orta";
    case "ileri";
    //break koymazsan beraber yazdırır.
    echo "orta ve ileri durumunda";
    break;
    default;
    echo "gecersiz durum";
}
?>