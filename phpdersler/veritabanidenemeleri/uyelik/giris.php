<?php
session_start();
include("baglanti.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $kullanici_adi=$_POST["username"];
    $sifre=$_POST["sifre"];
    $sorgu=mysqli_query($link,"SELECT *FROM kullanicilar where kullanici_adi='$kullanici_adi' and sifre='$sifre'");
    if(mysqli_num_rows($sorgu)==1){
        $kullanici=mysqli_fetch_assoc($sorgu);
        $_SESSION["kullanici_id"]=$kullanici["id"];
        header("Location:profil.php");
    }
    else{
        echo "kullanıcı adı veya şifre yanlıs";
    }
}

?>
<html>
    <head>
        <title>giris formu</title>
    </head>
    <body>
        <form action="giris.php" method="post">
            <label for="username">kullanici adi;</label><br>
            <input type="text" name="username"><br>
            <label for="sifre">sifre:</label><br>
            <input type="password" name="sifre"><br>
            <input type="submit" value="giris yap">
        </form>
    </body>
</html>