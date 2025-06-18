<?php
//dizideki elemanların kaç kez tekararlandığını öğrenmek için kullanılır
$arr=["tayfun","erbilen","tayfun","ahmet","abi","ahmet"];
$arr2=array_count_values($arr);//kaç kere tekrarlandığını bulmak için kullandık
print_r($arr2);


?>