<?php
$sayi=1;
while($sayi<=5){
    echo "sayi:".$sayi."<br>";
    $sayi++;
}
echo "<br>";
$meyveler=array("elma","armut","muz");
$i=0;
while($i<count($meyveler)){
    echo $meyveler[$i]."<br>";
    $i++;
}
echo "<br>";
echo "<br>";
$sayilar=1;
do{//önce koşullar do ile yazılıyor 
    echo "sayi:".$sayilar."<br>";
    $sayilar++;
}
while($sayilar<=5);//koşulun takibini burada yapıyorum.

?>