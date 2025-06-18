<?php
//explode() --> bir ifadeyi belli bir karakterden parçalayarak dizi haline getirmek için kullanılır
//implode()--> bir diziyi belli bir karakter ile string ifadeye döndürmek için kullanılır
$array1=array(4,42,23,16,15,8);
echo implode("+",$array1);
//çıktı:4+42+23+16+15+8
$myString="iskenderun-teknik-üniversitesi";
$array2=explode("-",$myString);
echo "<br>";
print_r($array2);
//çıktı:Array ( [0] => iskenderun [1] => teknik [2] => üniversitesi )
echo "<br>";
?>