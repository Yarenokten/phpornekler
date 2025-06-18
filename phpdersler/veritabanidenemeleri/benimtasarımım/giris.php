<?php
session_start();
include "baglanti.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $k_adi=$_POST['name'];
    $sifre=$_POST['sifre'];
    $sorgu=mysqli_query($cnn,"SELECT *FROM kullanicilar where kullanici_adi='$k_adi' and sifre='$sifre'");
    if(mysqli_num_rows($sorgu)==1){
        $kullanici=mysqli_fetch_assoc($sorgu);
        $_SESSION["kullanici_id"]=$kullanici["kullanici_id"];
        header("Location:kitapekle.php");
        exit;

    }
    else{
        echo "giriş yapamadınız:";
    }
}


?>
<html>
    <head>
        <title>giriş sayfası</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="name">kullanici adi:</label><br>
            <input type="text" name="name"><br>
            <label for="sifre">sifre:</label><br>
            <input type="password" name="sifre"><br>
            <button>Giriş yap</button>

        </form>
    </body>
</html>