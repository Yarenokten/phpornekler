<?php
function saaTarih(){
    echo "şu an :".date("y-m-d H:i:s");
}
saaTarih();
function gunMesaj(){
    $saat=date("H");
    if($saat<12){
        echo "gunaydın";
    }
    else{
        echo "iyi geceler";
    }
}
gunMesaj();
function selam($isim){
    echo " merhaba".$isim;

}
selam("yaren");
$sayilar=array(1,2,3,4,5,6);
function sayilaritopla($sayilar){
$toplam=0;
foreach($sayilar as $say){
$toplam +=$say;
}
return $toplam;
}
echo sayilaritopla($sayilar);
?>