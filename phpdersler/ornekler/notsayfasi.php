<?php
session_start();
if(!isset($_SESSION['number'])){
    header("Location: vize-finalornegi.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>welcome</title>
    </head>
    <body>
        <center>
<h1>hoş geldiniz</h1>
        </center>
<table border=2 align="center">
<tr>
    <td>Ders Adı</td>
    <td>Kredisi</td>
    <td>vize notu</td>
    <td>final notu</td>
    <td>ortalama</td>
    <td>durum </td>
</tr>
<tr>
    <td>algoritma ve programlama</td>
    <td>5</td>
    <td>75</td>
    <td>85</td>
    <td>
        <?php
        $vize=75;
        $final=85;
        $ort=$vize*0.4+$final*0.6;
        echo $ort;
        ?>
    </td>
    <td>
        <?php       
        if($ort<=50){
            echo" kaldınız.";
        }
        else{
            if($ort>50&&$ort<=60){
                echo "harf notunuz: CC";
            }
            elseif($ort>80&&$ort<=100){
                echo "harf notunuz: BB";
            }
        }
        ?>
    </td>
</tr>
<tr>
    <td>c# ile görsel programlama</td>
    <td>5</td>
    <td>55</td>
    <td>60</td>
    <td>
        <?php
        $vize=55;
        $final=60;
        $ort=$vize*0.4+$final*0.6;
        echo $ort;
        ?>
    </td>
    <td>
        <?php       
        if($ort<=50){
            echo" kaldınız.";
        }
        else{
            if($ort>50&&$ort<=60){
                echo "harf notunuz: CC";
            }
            elseif($ort>80&&$ort<=100){
                echo "harf notunuz: BB";
            }
        }
        ?>
    </td>
</tr>
<tr>
    <td>c# ile görsel programlama</td>
    <td>5</td>
    <td>55</td>
    <td>60</td>
    <td>
        <?php
        $vize=55;
        $final=60;
        $ort=$vize*0.4+$final*0.6;
        echo $ort;
        ?>
    </td>
    <td>
        <?php       
        if($ort<=50){
            echo" kaldınız.";
        }
        else{
            if($ort>50&&$ort<=60){
                echo "harf notunuz: CC";
            }
            elseif($ort>80&&$ort<=100){
                echo "harf notunuz: BB";
            }
        }
        ?>
    </td>
</tr><tr>
    <td>c# ile görsel programlama</td>
    <td>5</td>
    <td>55</td>
    <td>60</td>
    <td>
        <?php
        $vize=55;
        $final=60;
        $ort=$vize*0.4+$final*0.6;
        echo $ort;
        ?>
    </td>
    <td>
        <?php       
        if($ort<=50){
            echo" kaldınız.";
        }
        else{
            if($ort>50&&$ort<=60){
                echo "harf notunuz: CC";
            }
            elseif($ort>80&&$ort<=100){
                echo "harf notunuz: BB";
            }
        }
        ?>
    </td>
</tr><tr>
    <td>c# ile görsel programlama</td>
    <td>5</td>
    <td>55</td>
    <td>60</td>
    <td>
        <?php
        $vize=55;
        $final=60;
        $ort=$vize*0.4+$final*0.6;
        echo $ort;
        ?>
    </td>
    <td>
        <?php       
        if($ort<=50){
            echo" kaldınız.";
        }
        else{
            if($ort>50&&$ort<=60){
                echo "harf notunuz: CC";
            }
            elseif($ort>80&&$ort<=100){
                echo "harf notunuz: BB";
            }
        }
        ?>
    </td>
</tr>
</table>
<a href="vize-finalornegi.php" border=3 align="center">çıkış yap</a>
        
       
    </body>
</html>