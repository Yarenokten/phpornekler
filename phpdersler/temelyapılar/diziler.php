<?php
$meyveler=array("muz","elma","kiraz","karpuz");
echo $meyveler[1]."<hr>";
echo $meyveler[3];
echo "<hr>";
echo count($meyveler);
echo "<hr>";
$saydir=count($meyveler);
echo $saydir;
echo "<hr>";
for($i=0;$i<$saydir;$i++){
    echo $meyveler[$i]."<br>";
}
echo "<hr>";
$sayisaldizi=array(10,20,30,40);
echo $sayisaldizi[0];
echo "<br>";
print_r($sayisaldizi);
//olusturulan dizi içine yeni eleman ekleme işlemi:
array_push($sayisaldizi,50);
echo "50 sayisinin diziye eklenmiş hali: <br>";
print_r($sayisaldizi);
unset($sayisaldizi[1]);
//diziden silme işlemi:
echo "diziden eleman silme işlemi : <br>";
print_r($sayisaldizi);
//karışık dizi oluşturma işlemi:
$mixdizi=array("meyve",20,3.40);
echo "<hr>";
print_r($mixdizi);
echo "<hr>";
$anahtardizi=array("ali"=>"31","yeliz"=>"40","mehmet"=>"51");
print_r($anahtardizi);
echo "<br>";
//alinin yaşını yazdırma işlemi:
echo $anahtardizi["ali"];
echo "<br>";
echo "alinin yaşı:" .$anahtardizi["ali"];
//diziden yelizi silme işlemi
unset($anahtardizi["yeliz"]);
echo "<br>";
print_r($anahtardizi);
echo "<br>";
//diziye veri ekleme işlemi:
$anahtardizi["veli"]=60;
echo "<br>";
print_r($anahtardizi);
?>