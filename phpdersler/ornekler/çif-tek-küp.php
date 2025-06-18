<?php
/*problem:bir sayı çiftse karesini alsın tek ise küp alınsın
ve ekrana yazdırsın 0-20 sayılar için */
for($i=0;$i<20;$i++){
    if(($i%2)==0){
    echo $i*$i." çif sayıdır "; 
    }
    else{
        echo $i*$i*$i."tek sayıdır";
    }
    echo "<br>";
}
?>