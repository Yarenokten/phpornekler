<?php
//anahtarlar ile değerlerin yerlerini değiştirmek için kullanılır
$arr=[
    'ad'=>'tayfun',
    'soyad'=>'erbilen'
];
$arr2=array_flip($arr);
print_r($arr2);
//çıktı:Array ( [tayfun] => ad [erbilen] => soyad )
?>