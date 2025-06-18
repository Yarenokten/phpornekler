<?php
//dizide değer aramak için kullanılır değer varsa değerin anahtarı döndürülür.
$arr=[
    'ad'=>'tayfun',
    'soyad'=>'erbilen'
];
$test=array_search('erbilen',$arr);
//erbilen arr dizisinde bir soyad olduğu için bizim çıktımız:soyad olacaktır(anahatar değer)
echo $test;
?>
