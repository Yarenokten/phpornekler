<?php
$arr1=["tayfun","erbilen"];
$arr2=["ahmet","abi"];
$arr=array_merge($arr2,$arr1);
//ilk hangi diziyi yazdıysan onun verileri sıfırıncı indexten baslıyor
print_r($arr);
echo "<hr>";
$dizi1=[1,2,3,4,5];
$dizi2=[6,7,8,9,10];
$dizi3=array_merge($dizi1,$dizi2);
print_r($dizi3);
for($i=0;$i<10;$i++){
    echo $dizi3[$i]."<br>";
}
?>